<?php

namespace App\Http\Controllers;
use App\Models\Inventario;

use App\Models\Tesis;
use Illuminate\Http\Request;

class TesisController extends Controller
{
    
    public function index()
    {
        $tesis=Tesis::all();
        return view('tesis.index',compact('tesis'));
    }

   
    public function create()
    {
        return view('tesis.create');
    }

    
    public function store(Request $request)
    {
            $request->validate([
               // 'portada'=>'required',
               // 'ninv' =>'required',
                //'sgtopografica'=>'required',
                'titulo'=>'required',
                'subtitulo'=>'required',
                'idioma'=>'required',
               // 'autores'=>'required',
               // 'lugar'=>'required',
                'ano'=>'required',
                'pais'=>'required',
                'cantpag'=>'required',
                'dimensiones'=>'required',
                //'matAnexo'=>'required',
                'dscTemario'=>'required',
     
            ]);
            if ($request->hasFile('image')){
                $imgname=$request->image->getClientOriginalName();
                $destino=public_path('tesisPortada');
                $request->image->move($destino,$imgname);

            }else{
                $imgname=null;
            }
            

            //CODIGO PARA INCREMENTAR EL NUMERO DEL CODIGO DEL INVENTARIO.
            $codigo=Inventario::where('id', 1)->first();
             $incremento=$codigo->codigo+1;
             $codigo->codigo=$incremento;
             $codigo->save();
             $codigoConCeros=str_pad($codigo->codigo,8,"0",STR_PAD_LEFT);
            
            $tesis = Tesis::create([
                'image'=> $imgname,
                'ninv' =>$codigoConCeros,
                'sgtopografica'=>request('sgtopografica'),
                'titulo'=>request('titulo'),
                'subtitulo'=>request('subtitulo'),
                'idioma'=>request('idioma'),
                'autores'=>request('autores'),
                'lugar'=>request('lugar'),
                'ano'=>request('ano'),
                'pais'=>request('pais'),
                'cantpag'=>request('cantpag'),
                'dimensiones'=>request('dimensiones'),
                'matAnexo'=>request('matAnexo'),
                'dscTemario'=>request('dscTemario'),
            ]);
            return redirect()->route('tesis.index');

    }

    
    public function show(Tesis $tesi)
    {
        return view('tesis.show',compact('tesi'));
    }

    public function edit(Tesis $tesi)
    {
        return view('tesis.edit',compact('tesi'));
    }

    
    public function update(Request $request,  $id)
    {
        $tesis=Tesis::findOrfail($id);

        $request->validate([
            'image'=>'required',
            
            'sgtopografica'=>'required',
            'titulo'=>'required',
            'subtitulo'=>'required',
            'idioma'=>'required',
            'autores'=>'required',
            'lugar'=>'required',
            'ano'=>'required',
            'pais'=>'required',
            'cantpag'=>'required',
            'dimensiones'=>'required',
            'matAnexo'=>'required',
            'dscTemario'=>'required',
 
        ]);


        if ($request->hasFile('image')){
            $imgname=$request->image->getClientOriginalName();
            $destino=public_path('tesisPortada');
            $request->portada->move($destino,$imgname);

        }else{
            $imgname=$tesis->image;
        }

       $tesis->image=$imgname;
       $tesis->ninv=$request->get('ninv');
       $tesis->sgtopografica=$request->get('sgtopografica');
       $tesis->titulo=$request->get('titulo');
       $tesis->subtitulo=$request->get('subtitulo');
       $tesis->idioma=$request->get('idioma');
       $tesis->autores=$request->get('autores');
       $tesis->lugar=$request->get('lugar');
       $tesis->ano=$request->get('ano');
       $tesis->pais=$request->get('pais');
       $tesis->cantpag=$request->get('cantpag');
       $tesis->dimensiones=$request->get('dimensiones');
       $tesis->matAnexo=$request->get('matAnexo');
       $tesis->dscTemario=$request->get('dscTemario');
       $tesis->update();
    }

    
    public function destroy(Tesis $tesis)
    {
        $tesis->delete();
        return redirect('tesis.index');
    }

}
