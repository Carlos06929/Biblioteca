<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       $this->call(DinstitucionSeed::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategoriaSeed::class);
        $this->call(EstudianteSeeder::class);
        $this->call(InventarioSeeder::class);

        // $this->call(EventoSeeder::class);
        //$this->call(RevistaSeeder::class);
       // $this->call(LibroSeeder::class);


    }
}
