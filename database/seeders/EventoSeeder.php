<?php

namespace Database\Seeders;

use App\Models\Evento\Evento;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::factory(1000)->create();
    }
}
