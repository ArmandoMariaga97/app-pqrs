<?php

use Illuminate\Database\Seeder;
use App\Role;

class Roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'rol'      => 'Administrador',
        ]);
        Role::create([
            'rol'      => 'Asesor',
        ]);
        Role::create([
            'rol'      => 'Cliente',
        ]);
    }
}
