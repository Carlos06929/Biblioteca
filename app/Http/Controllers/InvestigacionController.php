<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use App\Models\Investigacion;
use App\Exports\InvestigacionExport;
use Maatwebsite\Excel\Facades\Excel;

class InvestigacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigacion=Investigacion::all();
        return view('investigacion.index')->with('investigaciones',$investigacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idioma=Idioma::all();
        return view('investigacion.create')
                  ->with('idioma',$idioma);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'signatura_topografica'=>'required',
        ]);


         if ($request->hasFile('image')) {
             $imgname=$request->image->getClientOriginalName();
             $destino=public_path('imgs/Invimages/');
             $request->image->move($destino,$imgname);
         }else{
             $imgname='rpredeterminada.jpg';
         }
         $investigacion=Investigacion::create([
             'numero_inventario'=>request('numero_inventario'),
             'signatura_topografica'=>request('signatura_topografica'),
             'estado'=>request('estado'),
             'titulo'=>request('titulo'),
             'tema'=>request('tema'),
             'idioma'=>request('idioma'),
              'autor'=>json_encode($request->autor),
             'lugar'=>request('lugar'),
             'editorial'=>request('editorial'),
             'edicion'=>request('edicion'),
             'anio'=>request('anio'),
             'pais'=>request('pais'),
             'isbn'=>request('isbn'),
             'cantidad_paginas'=>request('cantidad_paginas'),
             'dimensiones'=>request('dimensiones'),
             'material_anexo'=>request('material_anexo'),
             'descripcion'=>request('descripcion'),
             'image'=> $imgname
            ]);
            return redirect()->route('investigacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idioma=Idioma::all();
        $investigacion=Investigacion::find($id);
        return view('investigacion.show',compact('investigacion'))->with('idioma',$idioma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idioma=Idioma::all();
       $investigaciones=Investigacion::find($id);
       return view('investigacion.edit')
       ->with('investigaciones',$investigaciones)
       ->with('idioma',$idioma);
       ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $investigacion=Investigacion::find($id);

         if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('imgs/Invimages');
            $request->image->move($destino,$imgname);
        }else{
            $imgname=$investigacion->image;
        }

             $investigacion=Investigacion::find($id);
             $investigacion->signatura_topografica = $request->get('signatura_topografica');
             $investigacion->titulo= $request->get('titulo');
             $investigacion->tema= $request->get('tema');
             $investigacion-> idioma= $request->get('idioma');
             // $investigacion-> autor= $request->get('autor');
             $investigacion->autor=json_encode($request->autor);
             $investigacion ->lugar= $request->get('lugar');
             $investigacion ->editorial= $request->get('editorial');
             $investigacion ->edicion= $request->get('edicion');
             $investigacion ->anio= $request->get('anio');
             $investigacion ->pais= $request->get('pais');
             $investigacion ->isbn= $request->get('isbn');
             $investigacion->cantidad_paginas= $request->get('cantidad_paginas');
             $investigacion ->dimensiones= $request->get('dimensiones');
             $investigacion->material_anexo= $request->get('material_anexo');
             $investigacion ->descripcion= $request->get('descripcion');
             $investigacion ->image=$imgname;
             $investigacion ->save();

             return redirect()->route('investigacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Investigacion  $investigacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investigacion= Investigacion::find($id);
        $investigacion->delete();
        return redirect()->route('investigacion.index');
    }
    public function ExportPdf(){
        $investigaciones=Investigacion::all();
        $pdf=PDF::loadView('investigaciones.pdf',compact('investigaciones'));
        $pdf->setPaper('carta','portrait');
      //  return $pdf->download('estudiantes.pdf');
        return $pdf->stream('investigaciones.pdf');
}
public function ExportExcel(){
   return Excel::download(new InvestigacionExport, 'investigaciones.xlsx');

 }

  public function Ejemplar(){
      return view('investigacion.ejemplar');
  }

}
