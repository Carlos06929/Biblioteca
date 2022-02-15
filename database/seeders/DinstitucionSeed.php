<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DinstitucionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucions')->insert([
            'nombre'=>'Centro de Documentacion en Sociologia Dr. Jose Mirtenbaum',
            'NombInst'=>'U.A.G.R.M.',
            'direccion'=>'Entre 2º y 3º anillo de la avenida Bush',
            'telefono'=>'',
            'ciudad'=>'Santa Cruz',
            'url'=>'',
            'correo'=>'',
            'pais'=>'Bolivia',
            'logo'=>'',
            'cargo'=>'Unidad de tratamiento, analisis y digitalizacion',
            'encargado'=>'Elvis Noel Llanque',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),


        ]);
    }
}
