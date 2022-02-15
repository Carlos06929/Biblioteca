<?php

namespace App\Exports;


use App\Models\Investigacion;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;

class InvestigacionExport implements FromView
{

    public function view(): View
    {

        $investigaciones=Investigacion::all();
        return view('investigacion.excel', [
            'investigaciones'=>$investigaciones
        ]);
    }
}
