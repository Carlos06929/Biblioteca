<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Categoria;
use App\Models\Libro;
use Illuminate\Support\Facades\DB;

use App\Models\Inventario;
use App\Exports\LibroExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $libros=Libro::all();
        return view('libro.index')->with('libros',$libros);
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
         return view('libro.create')->with('categorias',$categorias)->with('autores',$autores);
    }

    
    
    public function store(Request $request)
    {

        $request->validate([
            'signatura_topografica'=> 'required|string',
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
            $destino=public_path('imgs/libros');
            $request->image->move($destino,$imgname);
        }else{
            $imgname='rpredeterminada.jpg';
        }

        /*CODIGO PARA INCREMENTAR EL NUMERO DEL CODIGO DEL INVENTARIO.
        $codigo=Inventario::where('id', 1)->first();
        $incremento=$codigo->codigo+1;
        $codigo->codigo=$incremento;
        $codigo->save();
        $codigoConCeros=str_pad($codigo->codigo,8,"0",STR_PAD_LEFT);*/


        $libro=new Libro;
        $libro->signatura_topografica=$request->signatura_topografica;
        $libro->nombre_portada=$imgname;
        $libro->titulo=$request->titulo;
        $libro->subtitulo=$request->subtitulo;
        $libro->idioma=$request->idioma;
        $libro->lugar=$request->lugar;
        $libro->editor=$request->editor;
        $libro->anio=$request->anio;
        $libro->pais=$request->pais;
        $libro->editorial=$request->editorial;
        $libro->edicion=$request->edicion;
        $libro->isbn=$request->isbn;
        $libro->cantidad_paginas=$request->cantidad_paginas;
        $libro->dimensiones=$request->dimensiones;
        $libro->otras_caracteristicas=$request->otras_caracteristicas;
        $libro->material_anexo=$request->material_anexo;
        $libro->descripcion=$request->descripcion;
        $libro->ejemplares=1;
        $libro->ultimoEjemplar=1;
        $libro->save();

        $inventario=new Inventario;
        $inventario->id_documento=$libro->id;
        $inventario->estado=1;
        $inventario->ejemplar=1;
        $inventario->tipo="L";
        $inventario->save();

        return redirect()->route('libro.index');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $libro=Libro::find($id);
        return view('libro.show')->with('libro',$libro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=Categoria::all();
        $autores=Autor::all();
        $libro=Libro::find($id);

         return view('libro.edit')->with('libro',$libro)->with('categorias',$categorias)->with('autores',$autores);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        if ($request->hasFile('image')) {
            $imgname=time().'.'.$request->image->getClientOriginalExtension();
            $destino=public_path('imgs');
            $request->image->move($destino,$imgname);
        }else{
            $imgname='rpredeterminada.jpg';
        }

        $libro=Libro::find($id);
        $libro->signatura_topografica=$request->signatura_topografica;



        $libro->nombre_portada=$imgname;

        $libro->titulo=$request->titulo;
        $libro->subtitulo=$request->subtitulo;
        $libro->idioma=$request->idioma;
        $libro->lugar=$request->lugar;
        $libro->editor=$request->editor;

        $libro->anio=$request->anio;
        $libro->pais=$request->pais;
        $libro->editorial=$request->editorial;
        $libro->edicion=$request->edicion;
        $libro->isbn=$request->isbn;
        $libro->cantidad_paginas=$request->cantidad_paginas;
        $libro->dimensiones=$request->dimensiones;
        $libro->otras_caracteristicas=$request->otras_caracteristicas;
        $libro->material_anexo=$request->material_anexo;
        $libro->descripcion=$request->descripcion;
        $libro->save();
        return redirect()->route('libro.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $ejemplares=Inventario::where('id_documento',$id)->where('tipo','L')->get();
        foreach ($ejemplares as $ejemplar) {
            $ejemplar->delete();    
        }

        $libro=Libro::find($id);
        $libro->delete();
        return redirect()->route('libro.index');
    }
    public function ExportPdf(){
        $libros=Libro::all();
        $pdf=PDF::loadView('libro.pdf',compact('libros'));
        $pdf->setPaper('carta','portrait');
      //  return $pdf->download('estudiantes.pdf');
        return $pdf->stream('libros.pdf');
    }
    public function ExportExcel(){
    return Excel::download(new LibroExport, 'libros.xlsx');

    }

    public function listaEjemplares($id){
        $ejemplares=Inventario::where('id_documento',$id)->where('tipo','L')->get();
        $libro=Libro::find($id);
        return view('libro.ejemplares')->with('libro',$libro)->with('ejemplares',$ejemplares);
    }

    public function agregarEjemplar($id){

        $libro=Libro::find($id);
        $libro->ejemplares=$libro->ejemplares+1;
        $libro->ultimoEjemplar=$libro->ultimoEjemplar+1;
        $libro->save();

        

        $inventario=new Inventario;
        $inventario->id_documento=$id;
        $inventario->estado=1;
        $inventario->ejemplar=$libro->ultimoEjemplar;
        $inventario->tipo="L";
        $inventario->save();
        

        $ejemplares=Inventario::where('id_documento',$id)->get();
        $libro=Libro::find($id);
        return redirect()->route('libro.ejemplares', [$id]);

    }

    public function eliminarEjemplar(Request $request){        

        $ejemplar=Inventario::find($request->id_ejemplar);
        $ejemplar->delete();

        $ejemplares=Inventario::where('id_documento',$request->id_libro)->get();

        $libro=Libro::find($request->id_libro);
        $incremento=$libro->ejemplares-1;
        $libro->ejemplares=$incremento;
        $libro->save();

        return redirect()->route('libro.ejemplares', [$request->id_libro]);

        
    }


}
