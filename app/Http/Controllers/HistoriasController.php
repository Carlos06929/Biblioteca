<?php

namespace App\Http\Controllers;

use App\Models\Historias;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('historia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('historia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function show(Historias $historias)
    {
        return view('historia.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function edit(Historias $historias)
    {
        return view('historia.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historias $historias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Historias  $historias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historias $historias)
    {
        //
    }
}
