<?php

namespace App\Http\Controllers;

use App\Models\Inventario;

use App\Models\TDirigido;
use Illuminate\Http\Request;

class TDirigidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tdirigido=TDirigido::all();
        return view('tdirigido.index',compact('tdirigido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tdirigido.create');
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
            'signatura_topografica'=>'required|max:20',
            'estado'=>'required|string',
            'titulo'=>'required|string',
            'subtitulo'=>'required|string',
            'idioma'=>'required|string',
            'autor'=>'required|array',
            'lugar'=>'required|string',
            'anio'=>'required|integer',
            'pais'=>'required|string',
            'cantidad_paginas'=>'required|integer',
            'dimensiones'=>'required|string',
            'material_anexo'=>'required|string',
            'descripcion'=>'required|max:100',
        ]);

        if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('imgs/tdirigido/');
            $request->image->move($destino,$imgname);
        }else{
            $imgname='rpredeterminada.jpg';
        }


        //CODIGO PARA INCREMENTAR EL NUMERO DEL CODIGO DEL INVENTARIO.
        $codigo=Inventario::where('id', 1)->first();
        $incremento=$codigo->codigo+1;
        $codigo->codigo=$incremento;
        $codigo->save();
        $codigoConCeros=str_pad($codigo->codigo,8,"0",STR_PAD_LEFT);

        

        $tdirigido=TDirigido::create([
            'numero_inventario'=>$codigoConCeros,
            'signatura_topografica'=>request('signatura_topografica'),
            'estado'=>request('estado'),
            'titulo'=>request('titulo'),
            'subtitulo'=>request('subtitulo'),
            'idioma'=>request('idioma'),
            'autor'=>json_encode($request->autor),
            'lugar'=>request('lugar'),
            'anio'=>request('anio'),
            'pais'=>request('pais'),
            'cantidad_paginas'=>request('cantidad_paginas'),
            'dimensiones'=>request('dimensiones'),
            'material_anexo'=>request('material_anexo'),
            'descripcion'=>request('descripcion'),
            'imagen'=> $imgname
           ]);
           return redirect()->route('tdirigido.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TDirigido  $tDirigido
     * @return \Illuminate\Http\Response
     */
    public function show(TDirigido $tdirigido)
    {
          return view('tdirigido.show',compact('tdirigido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TDirigido  $tDirigido
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tdirigidos=TDirigido::find($id);
        return view('tdirigido.edit')->with('tdirigido',$tdirigidos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TDirigido  $tDirigido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $tdirigido=TDirigido::find($id);
        $request->validate([

            'signatura_topografica'=>'required|max:20',
            'titulo'=>'required|string',
            'subtitulo'=>'required|string',
            'idioma'=>'required|string',
            'autor'=>'required|array',
            'lugar'=>'required|string',
            'anio'=>'required|integer',
            'pais'=>'required|string',
            'cantidad_paginas'=>'required|integer',
            'dimensiones'=>'required|string',
            'material_anexo'=>'required|string',
            'descripcion'=>'required|max:100|string',
         ]);

         if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('imgs/tdirigido');
            $request->image->move($destino,$imgname);
        }else{
            $imgname=$tdirigido->imagen;
        }

             $tdirigido=TDirigido::find($id);
             $tdirigido->signatura_topografica = $request->get('signatura_topografica');
             $tdirigido->titulo= $request->get('titulo');
             $tdirigido-> subtitulo= $request->get('subtitulo');
             $tdirigido-> idioma= $request->get('idioma');
             $tdirigido->autor=json_encode($request->autor);
             $tdirigido ->lugar= $request->get('lugar');
             $tdirigido ->anio= $request->get('anio');
             $tdirigido ->pais= $request->get('pais');
             $tdirigido->cantidad_paginas= $request->get('cantidad_paginas');
             $tdirigido ->dimensiones= $request->get('dimensiones');
             $tdirigido->material_anexo= $request->get('material_anexo');
             $tdirigido ->descripcion= $request->get('descripcion');
             $tdirigido ->imagen=$imgname;
             $tdirigido ->save();

             return redirect()->route('tdirigido.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TDirigido  $tDirigido
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tdirigido= TDirigido::find($id);
        $tdirigido->delete();
        return redirect()->route('tdirigido.index');
    }
}
