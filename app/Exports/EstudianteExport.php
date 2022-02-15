<?php

namespace App\Exports;

use App\Models\Estudiante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class EstudianteExport implements FromView
{
   
    public function view(): View
    {
        
        $estudiantes=Estudiante::all();
        return view('estudiante.excel', [
            'estudiantes'=>$estudiantes
        ]);
    }
}
