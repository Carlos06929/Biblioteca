<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'SuperAdmin']);
        $role2=Role::create(['name'=>'Admin']);

        Permission::create(['name'=>'Gestion de Usuarios'])->syncRoles([$role1]);
        Permission::create(['name'=>'Gestion General'])->syncRoles([$role2]);
        Permission::create(['name'=>'user.index']);
        Permission::create(['name'=>'users.edit']);
        Permission::create(['name'=>'users.create']);
        Permission::create(['name'=>'users.destroy']);

    }
}
