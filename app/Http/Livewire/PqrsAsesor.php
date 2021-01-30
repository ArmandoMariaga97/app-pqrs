<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\PQR;


class PqrsAsesor extends Component
{
    public function render()
    {
        $pqrs_procesados = PQR::where('asesor', auth()->user()->id)
        ->where('estado','3')
        ->with(['clienteCreador','tipoRadicado','asesorPqrs'])->orderBy('id','desc')->get();

        return view('livewire.asesores_pqrs.pqrs-asesor',['pqrs_procesados' => $pqrs_procesados]);
    }
}
