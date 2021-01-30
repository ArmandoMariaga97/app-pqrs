<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;


    protected $redirectTo = RouteServiceProvider::HOME;


    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data)
    {
        return Validator::make($data, [
            't_documento' => ['required'],
            'documento' => ['required', 'integer', 'min:5', 'max:10'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'celular' => ['required', 'integer', 'min:5', 'max:15'],
            'rol' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data)
    {
        return User::create([
            'documento' => $data['documento'],
            'name' => $data['name'],
            'email' => $data['email'],
            'celular' => $data['celular'],
            'rol' => '3',
            'password' => Hash::make($data['password']),
        ]);
    }
}
