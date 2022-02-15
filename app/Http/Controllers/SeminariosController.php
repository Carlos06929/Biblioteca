<?php

namespace App\Http\Controllers;

use App\Models\Seminarios;
use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Asesores;
use App\Models\Idioma;



class SeminariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encargados=Asesores::all();
        $idiomas=Idioma::all();

        return view('seminario.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $encargados=Asesores::all();
        $idiomas=Idioma::all();
        return view('seminario.create')->with('encargados',$encargados)->with('idiomas',$idiomas);
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
            'signatura_topografica'=> 'required|string',
            'titulo'=>'required|string',
            'subtitulo'=>'required|string',
            'idioma'=>'required|string',
            'lugar'=>'required|string',
            'editor'=>'required|string',
            'anio'=>'required|integer',
            'pais'=>'required|string',
            'edicion'=>'required|string',
            'isbn'=>'required|string',
            'cantidad_paginas'=>'required|integer',
            'dimensiones'=>'required|string',
            'material_anexo'=>'required|string',
            'descripcion'=>'required|string',


        ]);



        if ($request->categorias!=null) {
            $categorias=implode(',',$request->categorias);
        }
        if ($request->autores!=null) {
            $autores=implode(',',$request->autores);
        }



        //CODIGO PARA GUARDAR LA IMAGEN
        if ($request->hasFile('image')) {
            $imgname=time().'.'.$request->image->getClientOriginalExtension();
            $destino=public_path('imgs/seminarios');
            $request->image->move($destino,$imgname);
        }else{
            $imgname='rpredeterminada.png';
        }

        //CODIGO PARA INCREMENTAR EL NUMERO DEL CODIGO DEL INVENTARIO.
        $codigo=Inventario::where('id', 1)->first();
        $incremento=$codigo->codigo+1;
        $codigo->codigo=$incremento;
        $codigo->save();
        $codigoConCeros=str_pad($codigo->codigo,8,"0",STR_PAD_LEFT);


        $seminario=new Seminarios();
        $seminario->signatura_topografica=$request->signatura_topografica;
        $seminario->autor=$autores;
        $seminario->numero_inventario=$codigoConCeros;

        $seminario->categoria=$categorias;
        $seminario->nombre_portada=$imgname;
        $seminario->estado=$request->estado;
        $seminario->titulo=$request->titulo;
        $seminario->subtitulo=$request->subtitulo;
        $seminario->idioma=$request->idioma;
        $seminario->lugar=$request->lugar;
        $seminario->editor=$request->editor;
        $seminario->anio=$request->anio;
        $seminario->pais=$request->pais;
        $seminario->editorial=$request->editorial;
        $seminario->edicion=$request->edicion;
        $seminario->isbn=$request->isbn;
        $seminario->cantidad_paginas=$request->cantidad_paginas;
        $seminario->dimensiones=$request->dimensiones;
        $seminario->otras_caracteristicas=$request->otras_caracteristicas;
        $seminario->material_anexo=$request->material_anexo;
        $seminario->descripcion=$request->descripcion;
        $seminario->save();
        return redirect()->route('seminario.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminarios  $seminarios
     * @return \Illuminate\Http\Response
     */
    public function show(Seminarios $seminarios)
    {
        return view('seminario.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminarios  $seminarios
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminarios $seminarios)
    {
        return view('seminario.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seminarios  $seminarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminarios $seminarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminarios  $seminarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminarios $seminarios)
    {
        //
    }
}
