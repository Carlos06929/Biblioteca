<?php

namespace Database\Seeders;

use App\Models\Revista;
use Illuminate\Database\Seeder;

class RevistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Revista::factory(100)->create();
    }
}
