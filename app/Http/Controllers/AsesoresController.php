<?php

namespace App\Http\Controllers;

use App\Models\Asesores;
use Illuminate\Http\Request;

class AsesoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesor=Asesores::all();
        return view('asesores.index')->with('asesores',$asesor);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asesores.create');
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
            'nombre' =>'required|unique:asesores'
        ]
    );
        $idioma=new Asesores();
        $idioma->nombre=$request->nombre;
        $idioma->save();
        return redirect('asesores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asesores  $asesores
     * @return \Illuminate\Http\Response
     */
    public function show(Asesores $asesores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asesores  $asesores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asesor=Asesores::find($id);
        return view('asesores.edit')->with('asesor',$asesor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asesores  $asesores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nombre' =>'required|max:50|unique:asesores'
        ]);
        $asesor=Asesores::find($id);
        $asesor->nombre=$request->nombre;
        $asesor->save();
        return redirect()->route('asesores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asesores  $asesores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asesor=Asesores::find($id);
        $asesor->delete();
        return redirect()->route('asesores.index');
    }
}
