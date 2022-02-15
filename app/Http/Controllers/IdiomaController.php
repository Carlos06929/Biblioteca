<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use App\Models\Idioma;
use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idioma=Idioma::all();
        return view('idioma.index')->with('idiomas',$idioma);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('idioma.create');
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
            'nombre' =>'required|unique:idiomas'
        ]
    );
        $idioma=new Idioma();
        $idioma->nombre=$request->nombre;
        $idioma->save();
        return redirect('idioma.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function show(Idioma $idioma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idioma=Idioma::find($id);
        return view('idioma.edit')->with('idioma',$idioma);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nombre' =>'required|max:50|unique:idiomas'
        ]);
        $idioma=Idioma::find($id);
        $idioma->nombre=$request->nombre;
        $idioma->save();
        return redirect()->route('idioma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idioma  $idioma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $idioma=Idioma::find($id);
        $idioma->delete();
        return redirect()->route('idioma.index');
    }
}
