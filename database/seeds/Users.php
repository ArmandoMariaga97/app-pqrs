<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;


use App\User;
use App\Role;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin Master',
            'email'     => 'admin@pqrs.com',
            'documento' => '1001001010',
            'celular'   => '3003003030',
            'ciudad'    => 'Medellin',
            'direccion' => 'Sin especificar',
            'password'  => Hash::make('admin1234'),
            'rol'       => '1'
        ]);
    }
}
