<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;

use Livewire\Component;
use App\User;

class Register extends Component
{
    public $confir_register = false;

    public $name, $email, $t_documento, $documento, $celular, $ciudad, $direccion, $password, $password_confir;

    public function render()
    {
        return view('livewire.auth.register');
    }

    public function registrar_cliente(){

        $this->validate([
            't_documento'       => 'required',
            'documento'         => 'required | integer | digits_between:5,15',
            'name'              => 'required | string | max:255',
            'email'             => 'required |  email | max:255 |',
            'celular'           => 'required | integer | digits_between:5,15',
            'ciudad'            => 'required | string',
            'direccion'         => 'required | string',
            'password'          => 'required | string ',
            'password_confir'   => 'required | string ',
        ]);

        if($this->password == $this->password_confir){

            $datos = [
                'name'          => $this->name,
                't_documento'   => $this->t_documento,
                'documento'     => $this->documento,
                'email'         => $this->email,
                'celular'       => $this->celular,
                'ciudad'       => $this->ciudad,
                'direccion'       => $this->direccion,
                'rol'           => '3',
                'password'      => Hash::make($this->password),
            ];

            User::create($datos);

            $this->confir_register = true;
            $this->reset('name','t_documento','documento','email','celular','password','password_confir');
        }

    }
}
