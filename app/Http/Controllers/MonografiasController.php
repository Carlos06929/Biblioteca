<?php

namespace App\Http\Controllers;

use App\Models\Monografias;
use Illuminate\Http\Request;

class MonografiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monografias.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monografias.create');
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
     * @param  \App\Models\Monografias  $monografias
     * @return \Illuminate\Http\Response
     */
    public function show(Monografias $monografias)
    {
        return view('monografias.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monografias  $monografias
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografias $monografias)
    {
        return view('monografias.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Monografias  $monografias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monografias $monografias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monografias  $monografias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monografias $monografias)
    {
        //
    }
}
