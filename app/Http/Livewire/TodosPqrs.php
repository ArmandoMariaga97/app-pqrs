<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\PQR;


use Livewire\Component;

class TodosPqrs extends Component
{
    public $buscar = '', $orderBy = 'radicado', $paginate = 5;

    public function render()
    {
        $pqrs_pend = PQR::where(function ($query){
            return $query->where('radicado', 'LIKE', "%{$this->buscar}%");
        })
        ->with(['clienteCreador','tipoRadicado','asesorPqrs'])
        ->orderBy($this->orderBy, 'asc')
        ->paginate($this->paginate);

        return view('livewire.todos-pqrs',['pqrs_pend' => $pqrs_pend]);
    }
}
