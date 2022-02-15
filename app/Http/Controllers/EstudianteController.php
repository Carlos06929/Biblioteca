<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Exports\EstudianteExport;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiante= Estudiante::all();
       return view('estudiante.index',compact('estudiante'));
      // return view('libro.index');
    }


    public function create()
    {
        return view('estudiante.create');
    }



    public function store(Request $request)
    {
        $request->validate([

            'carrera'=>'required',
            'registro'=>'required|max:10',
             'ci' =>'required|max:10',
             'nombre'=>'required',
             'apellidos'=>'required',
             'lugarNacimiento'=>'required',
             'fechaNacimiento'=>'required',
             'nacionalidad'=>'required',
             'domicilio'=>'required',
             'ciudad'=>'required',
             'telefono'=>'required',
             'correo'=>'required|email',
             'carrera'=>'required',
             'profesion'=>'required'

        ]);

        if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('images');
            $request->image->move($destino,$imgname);
        }else{
            $imgname='predeterminada.png';
        }

        $estudiante=Estudiante::create([
        'carrera'=>request('carrera'),
         'registro'=>request('registro'),
         'ci'=>request('ci'),
         'nombre'=>request('nombre'),
         'apellidos'=>request('apellidos'),
         'lugarNacimiento'=>request('lugarNacimiento'),
         'fechaNacimiento'=>request('fechaNacimiento'),
         'nacionalidad'=>request('nacionalidad'),
         'domicilio'=>request('domicilio'),
         'ciudad'=>request('ciudad'),
         'telefono'=>request('telefono'),
         'correo'=>request('correo'),
         'carrera'=>request('carrera'),
         'profesion'=>request('profesion'),
         'image'=> $imgname
        ]);
        return redirect()->route('estudiante.index');
    }


    public function show(Estudiante $estudiante)
    {

        return view('estudiante.ver',compact('estudiante'));
    }


    public function edit(Estudiante $estudiante)
    {

        return view('estudiante.edit',compact('estudiante'));
    }


    public function update(Request $request, $id)
    {

        $estudiante=Estudiante::findOrfail($id);
        $request->validate([

            'carrera'=>'required',
            'registro'=>'required',
             'ci' =>'required',
             'nombre'=>'required',
             'apellidos'=>'required',
             'lugarNacimiento'=>'required',
             'fechaNacimiento'=>'required',
             'nacionalidad'=>'required',
             'domicilio'=>'required',
             'ciudad'=>'required',
             'telefono'=>'required',
             'correo'=>'required|email',
             
             'profesion'=>'required',

        ]);

        if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('images');
            $request->image->move($destino,$imgname);
        }else{
            $imgname=$estudiante->image;
        }
        $estudiante->registro=$request->get('carrera');
        $estudiante->registro=$request->get('registro');
        $estudiante->ci=$request->get('ci');
        $estudiante->nombre=$request->get('nombre');
        $estudiante->apellidos=$request->get('apellidos');
        $estudiante->lugarNacimiento=$request->get('lugarNacimiento');
        $estudiante->fechaNacimiento=$request->get('fechaNacimiento');
        $estudiante->nacionalidad=$request->get('nacionalidad');
        $estudiante->domicilio=$request->get('domicilio');
        $estudiante->ciudad=$request->get('ciudad');
        $estudiante->telefono=$request->get('telefono');
        $estudiante->correo=$request->get('correo');
        $estudiante->carrera=$request->get('carrera');
        $estudiante->profesion=$request->get('profesion');
        $estudiante->image=$imgname;
        $estudiante->update();

           return redirect()->route('estudiante.index');
    }

    public function cishow(Estudiante $estudiante){
     return view('estudiante.carnet',compact('estudiante'));
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiante.index');
    }

    public function ExportPdf(){

       $estudiantes=Estudiante::all();
            $pdf=PDF::loadView('estudiante.pdfAll',compact('estudiantes'));
            $pdf->setPaper('carta','portrait');
          //  return $pdf->download('estudiantes.pdf');
            return $pdf->stream('estudiantes.pdf');
    }

    public function pdfEstudiante( Estudiante $estudiante){
        $pdf=PDF::loadView('estudiante.pdfCarnet',compact('estudiante'));

        return $pdf->stream('CEstudiante.pdf');
        // return $pdf->download('estudiantes.pdf');
    }
    public function ExportExcel(){
      return Excel::download(new EstudianteExport, 'estudiantes.xlsx');

    }







}
