<?php

namespace App\Http\Controllers;

use App\Models\Pasantias;
use Illuminate\Http\Request;

class PasantiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasantia.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasantia.create');
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
     * @param  \App\Models\Pasantias  $pasantias
     * @return \Illuminate\Http\Response
     */
    public function show(Pasantias $pasantias)
    {
        return view('pasantia.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasantias  $pasantias
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasantias $pasantias)
    {
        return view('pasantia.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasantias  $pasantias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasantias $pasantias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasantias  $pasantias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasantias $pasantias)
    {
        //
    }
}
