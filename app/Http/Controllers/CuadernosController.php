<?php

namespace App\Http\Controllers;

use App\Models\Cuadernos;
use Illuminate\Http\Request;

class CuadernosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cuaderno.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuaderno.create');
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
     * @param  \App\Models\Cuadernos  $cuadernos
     * @return \Illuminate\Http\Response
     */
    public function show(Cuadernos $cuadernos)
    {
        return view('cuaderno.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuadernos  $cuadernos
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuadernos $cuadernos)
    {
        return view('cuaderno.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuadernos  $cuadernos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cuadernos $cuadernos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuadernos  $cuadernos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuadernos $cuadernos)
    {
        //
    }
}
