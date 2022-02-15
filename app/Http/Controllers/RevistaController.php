<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Idioma;
use App\Models\Revista;
use App\Models\Categoria;
use App\Models\Inventario;
use Illuminate\Http\Request;
use App\Exports\RevistaExport;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class RevistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revista=Revista::all();

        return view('revista.index',compact('revista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        $autores=Autor::all();
        return view('revista.create')->with('categorias',$categorias)->with('autores',$autores);
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
           
        ]);
        /* $data['autor']=json_encode($request->autor);
        $data['categoria']=json_encode($request->categoria);
        $revista=Revista::create($data); */

        //ordenar autores y categorias
        $categorias="";
        if ($request->categorias!=null) {
            $categorias=implode(',',$request->categoria);
        }

        $autores="";
        if ($request->autores!=null) {
            $autores=implode(',',$request->autor);
        }

        if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('imgs');
            $request->image->move($destino,$imgname);
        }else{
            $imgname='rpredeterminada.jpg';
        }

        //seccion incrementasion de codigo de inventarios
      /*  $codigo=Inventario::where('id', 1)->first();
        $incremento=$codigo->codigo+1;
        $codigo->codigo=$incremento;
        $codigo->save();
        $codigoConCeros=str_pad($codigo->codigo,8,"0",STR_PAD_LEFT);*/


        $revista=new Revista;
        $revista->signatura_topografica = $request->get('signatura_topografica');
        $revista->titulo= $request->get('titulo');
        $revista-> subtitulo= $request->get('subtitulo');
        $revista-> idioma= $request->get('idioma');
        /* $revista-> autor= $request->get('autor');
        $revista->autor=json_encode($request->autor);
        $revista->categoria=json_encode($request->categoria);*/
        // $revista ->categoria= $request->get('categoria');
        $revista ->lugar= $request->get('lugar');
        $revista ->editorial= $request->get('editorial');
        $revista ->anio= $request->get('anio');
        $revista->pais= $request->get('pais');
        $revista->isbn= $request->get('isbn');
        $revista->cantidad_paginas= $request->get('cantidad_paginas');
        $revista ->dimensiones= $request->get('dimensiones');
        $revista->material_anexo= $request->get('material_anexo');
        $revista->descripcion= $request->get('descripcion');
        $revista->ejemplares=1;
        $revista->ultimoEjemplar=1;
        $revista->image=$imgname;
        $revista->save();

        

            $inventario=new Inventario;
            $inventario->id_documento=$revista->id;
            $inventario->estado=1;
            $inventario->ejemplar=1;
            $inventario->tipo="R";
            $inventario->save();

           return redirect()->route('revista.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function show(Revista $revista)
    {

        return view('revista.show',compact('revista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=Categoria::all();
        $autores=Autor::all();
       $revistas=Revista::find($id);
       return view('revista.edit')->with('revista',$revistas)->with('categorias',$categorias)->with('autores',$autores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   /*'autor'=>'required|array',
            'categoria'=>'required|array',*/
        $revista=Revista::find($id);
        $request->validate([
            'signatura_topografica'=>'required|max:20',
         ]);

         if ($request->hasFile('image')) {
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('imgs');
            $request->image->move($destino,$imgname);
        }else{
            $imgname=$revista->image;
        }


             $revista=Revista::find($id);
             $revista->signatura_topografica = $request->get('signatura_topografica');

             $revista->titulo= $request->get('titulo');
             $revista-> subtitulo= $request->get('subtitulo');
             $revista-> idioma= $request->get('idioma');
             /* $revista-> autor= $request->get('autor');
             $revista->autor=json_encode($request->autor);
             $revista->categoria=json_encode($request->categoria);*/
             // $revista ->categoria= $request->get('categoria');
             $revista ->lugar= $request->get('lugar');
             $revista ->editorial= $request->get('editorial');
             $revista ->anio= $request->get('anio');
             $revista ->pais= $request->get('pais');
             $revista ->isbn= $request->get('isbn');
             $revista->cantidad_paginas= $request->get('cantidad_paginas');
             $revista ->dimensiones= $request->get('dimensiones');
             $revista->material_anexo= $request->get('material_anexo');
             $revista ->descripcion= $request->get('descripcion');
             $revista ->image=$imgname;
             $revista ->save();

             return redirect()->route('revista.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revista  $revista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ejemplares=Inventario::where('id_documento',$id)->where('tipo','R')->get();
        foreach ($ejemplares as $ejemplar) {
            $ejemplar->delete();    
        }

        $revista= Revista::find($id);
        $revista->delete();
        return redirect()->route('revista.index');
    }


    public function ExportPdf(){
             $revistas=Revista::all();
             $pdf=PDF::loadView('revista.pdf',compact('revistas'));
             $pdf->setPaper('carta','portrait');
           //  return $pdf->download('estudiantes.pdf');
             return $pdf->stream('revistas.pdf');
     }


     public function ExportExcel(){
        return Excel::download(new RevistaExport, 'revistas.xlsx');

      }

      public function listaEjemplares($id){
        $ejemplares=Inventario::where('id_documento',$id)->where('tipo','R')->get();
        $revista=Revista::find($id);
        return view('revista.ejemplares')->with('revista',$revista)->with('ejemplares',$ejemplares);
    }

    public function agregarEjemplar($id){

        $revista=Revista::find($id);
        $revista->ejemplares=$revista->ejemplares+1;
        $revista->ultimoEjemplar=$revista->ultimoEjemplar+1;
        $revista->save();

        

        $inventario=new Inventario;
        $inventario->id_documento=$id;
        $inventario->estado=1;
        $inventario->ejemplar=$revista->ultimoEjemplar;
        $inventario->tipo="R";
        $inventario->save();
        

        return redirect()->route('revista.ejemplares', [$id]);
    }

    public function eliminarEjemplar(Request $request){        

        $ejemplar=Inventario::find($request->id_ejemplar);
        $ejemplar->delete();

        $revista=Revista::find($request->id_revista);
        $incremento=$revista->ejemplares-1;
        $revista->ejemplares=$incremento;
        $revista->save();

        return redirect()->route('revista.ejemplares', [$request->id_revista]);        
    }
}
