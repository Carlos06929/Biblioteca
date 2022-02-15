<?php

namespace App\Http\Controllers\Evento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::get();
        return view('evento.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evento.create');
    }

    public function traer(){
        $evento = Evento::select('id','nombre',
        'descripcion',
        'tipo_evento',
        'hora_inicio',
        'fecha_inicio',
        'fecha_fin',
        'lugar',
        'estado',
        )->get();

        return datatables()->of($evento)->addColumn('show','evento.actionsShow')
        ->addColumn('edit','evento.actionEdit')
        ->addColumn('delete','evento.actionDelete')
        ->addColumn('estado','evento.actionColor')
        ->rawColumns(['estado','show','edit','delete'])->toJson();
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
            'nombre' =>'required',
            'descripcion' =>'required|max:50',
            'tipo_evento' =>'required',
            'hora_inicio' =>'required',
            'fecha_inicio' =>'required',
            'fecha_fin' =>'required',
            'lugar' =>'required',


        ]);

        $inputs = $request->all();
        $evento = Evento::create($inputs);
        return redirect()->route('evento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        return view('evento.show',compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('evento.edit',compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Evento $evento)
    {
        $request->validate([
            'nombre' =>'required',
            'descripcion' =>'required|max:50',
            'tipo_evento' =>'required',
            'hora_inicio' =>'required',
            'fecha_inicio' =>'required',
            'fecha_fin' =>'required',
            'lugar' =>'required',
        ]

    );
        $inputs = $request->all();
        $evento->update($inputs);
        return redirect()->route('evento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
