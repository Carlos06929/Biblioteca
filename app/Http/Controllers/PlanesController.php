<?php

namespace App\Http\Controllers;

use App\Models\Idioma;
use App\Models\Planes;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\PDF;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plan=Planes::all();
      return view('plan.index')->with('plan',$plan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idioma=Idioma::all();
        return view('plan.create')->with('idioma',$idioma);
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
             $destino=public_path('imgs/Planimages/');
             $request->image->move($destino,$imgname);
         }else{
             $imgname='rpredeterminada.jpg';
         }
         $plan=PLanes::create([
             'numero_inventario'=>request('numero_inventario'),
             'signatura_topografica'=>request('signatura_topografica'),
             'estado'=>request('estado'),
             'titulo'=>request('titulo'),
             'idioma'=>request('idioma'),
              'autor'=>json_encode($request->autor),
             'lugar'=>request('lugar'),
             'editor'=>request('editor'),
             'edicion'=>request('edicion'),
             'anio'=>request('anio'),
             'pais'=>request('pais'),

             'cantidad_paginas'=>request('cantidad_paginas'),
             'dimensiones'=>request('dimensiones'),
             'material_anexo'=>request('material_anexo'),
             'descripcion'=>request('descripcion'),
             'image'=> $imgname
            ]);
            return redirect()->route('plan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idioma=Idioma::all();
        $planes=PLanes::find($id);
        return view('plan.show',compact('planes'))->with('idioma',$idioma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idioma=Idioma::all();
       $planes=PLanes::find($id);
       return view('plan.edit')
       ->with('planes',$planes)
       ->with('idioma',$idioma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plan=PLanes::find($id);

        if ($request->hasFile('image')) {
           $imgname=$request->image->getClientOriginalName();
           $destino=public_path('imgs/Planimages/');
           $request->image->move($destino,$imgname);
       }else{
           $imgname=$plan->image;
       }
       $plan=Planes::find($id);
             $plan->signatura_topografica = $request->get('signatura_topografica');
             $plan->titulo= $request->get('titulo');
             $plan-> idioma= $request->get('idioma');
             $plan->autor=json_encode($request->autor);
             $plan ->lugar= $request->get('lugar');
             $plan ->editor= $request->get('editor');
             $plan ->edicion= $request->get('edicion');
             $plan ->anio= $request->get('anio');
             $plan ->pais= $request->get('pais');
             $plan ->estado= $request->get('estado');
             $plan->cantidad_paginas= $request->get('cantidad_paginas');
             $plan ->dimensiones= $request->get('dimensiones');
             $plan->material_anexo= $request->get('material_anexo');
             $plan ->descripcion= $request->get('descripcion');
             $plan ->image=$imgname;
             $plan ->save();

            return redirect()->route('plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planes  $planes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan= PLanes::find($id);
        $plan->delete();
        return redirect()->route('plan.index');
    }
    public function ExportPdf(){
        $planes=PLanes::all();
        $pdf=PDF::loadView('planes.pdf',compact('planes'));
        $pdf->setPaper('carta','portrait');
      //  return $pdf->download('estudiantes.pdf');
        return $pdf->stream('planes.pdf');

}
public function ejemplar(){
    return view('plan.ejemplar');
}
}
