<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Super Adminitrador',
            'email'=>'superadmin@gmail.com',
            'password'=>bcrypt('secret')
        ])->assignRole('SuperAdmin');

        User::create([
            'name'=>'Adminitrador',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('secret')
        ])->assignRole('Admin');

        User::create([
            'name'=>'Adminitrador2',
            'email'=>'admin2@gmail.com',
            'password'=>bcrypt('secret')
        ])->assignRole('SuperAdmin');
    }
}
