<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(auth()->user()->rol == 1){

            return view('admin.index');

        }elseif(auth()->user()->rol == 2){

            return view('asesor.index');

        }elseif(auth()->user()->rol == 3){

            return view('cliente.index');

        }else{

            redirect()->route('/');

        }
    }
}
