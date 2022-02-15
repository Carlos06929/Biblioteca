<?php

namespace App\Exports;

use App\Models\Libro;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class LibroExport implements FromView
{

    public function view(): View
    {

        $libros=Libro::all();
        return view('libro.excel', [
            'libros'=>$libros
        ]);
    }
}
