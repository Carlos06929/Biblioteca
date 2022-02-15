<?php

namespace App\Exports;

use App\Models\Revista;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
class RevistaExport implements FromView
{

    public function view(): View
    {

        $revistas=Revista::all();
        return view('revista.excel', [
            'revistas'=>$revistas
        ]);
    }
}
