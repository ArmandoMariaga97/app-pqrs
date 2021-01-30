<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\PQR;

use Livewire\Component;

class PqrsPendientes extends Component
{

    public $estado_carga = 1;

    public function render()
    {
        $pqrs_pend = PQR::where('estado','1')
        ->with(['clienteCreador','tipoRadicado','asesorPqrs'])->orderBy('id','desc')->get();

        return view('livewire.asesores_pqrs.pqrs-pendientes',['pqrs_pend' => $pqrs_pend]);
    }

    public function aceptarPQRS($id){
        $pqrs_old = PQR::find($id);
        if($pqrs_old->asesor == null or $pqrs_old->asesor == ''){

            $pqrs_old->asesor = auth()->user()->id;
            $pqrs_old->estado = '2';
            $pqrs_old->save();
            session()->flash('aceptado','ok');

        }else{

            session()->flash('aceptado_fail','ok');

        }
    }
    
    public function recargar(){
        if($this->estado_carga == 1){
            $this->estado_carga = 0;
        }elseif($this->estado_carga == 0){
            $this->estado_carga = 1;
        }
    }
}