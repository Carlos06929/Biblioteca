<?php

namespace App\Http\Controllers;

use App\Models\Institucion;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $instituciones=Institucion::find(24);
         $instituciones=Institucion::all();
        return view('dinstitucion.index')->with('institucion', $instituciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dinstitucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($imagen = $request->file('logo')){
            $rutaGuardarImagen='imagenes/';
            $imagenLogo=date("YmdH:i:s").",".$imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardarImagen,$imagenLogo);
            $logo['logo']="$imagenLogo";

        }

        $institucion= new Institucion();
         $institucion->nombre=$request->get('nombre');
         $institucion->NombInst=$request->get('NombInst');
         $institucion->direccion=$request->get('direccion');
         $institucion->telefono=$request->get('telefono');
         $institucion->ciudad=$request->get('ciudad');
         $institucion->url=$request->get('url');
         $institucion->correo=$request->get('correo');
         $institucion->pais=$request->get('pais');
         $institucion->logo=$request->get('logo');
         $institucion->cargo=$request->get('cargo');
         $institucion->encargado=$request->get('encargado');
         $institucion->save();

         return redirect('institucion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institucion)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Institucion $instituciones)
    {
        $instituciones=Institucion::find(1);
        return view('dinstitucion.edit',compact('instituciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $aux=Institucion::find($request->id);
         $aux->nombre=$request->nombre;
         $aux->NombInst=$request->get('NombInst');
         $aux->direccion=$request->direccion;
         $aux->telefono=$request->telefono;
         $aux->ciudad=$request->ciudad;
         $aux->url=$request->url;
         $aux->correo=$request->correo;
         $aux->pais=$request->pais;
         $aux->logo=$request->imagen;
         $aux->cargo=$request->cargo;
         $aux->encargado=$request->encargado;
         $aux->save();
         echo $request;

         

         return redirect('institucion');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Institucion $institucion)
    {
        //
    }
    public function imagen(Request $request){


       $imagen=$request->file('file');
       $nombreImagen=time() . '.' . $imagen->extension();
       $imagen->move(public_path('storage/logos'),$nombreImagen);

       return response()->json(['correcto'=>$nombreImagen]);


    }

    public function borrarimagen(Request $request){

        if($request->ajax()) {


             $imagen= $request->get('imagen');

           if(File::exists('storage/logos/' .  $imagen ) ){
               File::delete('storage/logos/' . $imagen );

           }
           return response('Imagen Eliminado',200);

        }

    }


}
