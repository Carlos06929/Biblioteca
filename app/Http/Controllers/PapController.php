<?php

namespace App\Http\Controllers;

use App\Models\Pap;
use Illuminate\Http\Request;

class PapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pap.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pap.create');
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
     * @param  \App\Models\Pap  $pap
     * @return \Illuminate\Http\Response
     */
    public function show(Pap $pap)
    {
        return view('pap.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pap  $pap
     * @return \Illuminate\Http\Response
     */
    public function edit(Pap $pap)
    {
        return view('pap.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pap  $pap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pap $pap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pap  $pap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pap $pap)
    {
        //
    }
}
