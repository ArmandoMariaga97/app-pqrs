<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use Livewire\Component;
use App\PQR;

class MisPqrs extends Component
{
    public function render()
    {
        $mis_pqrs = PQR::where('user_creador', auth()->user()->id)
                        ->with(['clienteCreador','tipoRadicado','asesorPqrs'])->orderBy('id','desc')->get();
        return view('livewire.cliente.mis-pqrs',['mis_pqrs' => $mis_pqrs]);
    }
}
