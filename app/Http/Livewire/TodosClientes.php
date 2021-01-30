<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\User;

class TodosClientes extends Component
{
    public $buscar = '';
    public $paginate = 5;
    public $orderBy = 'documento';
    public $cont = 1;

    public function render()
    {
        $clientes = User::where('rol','3')
        ->where(function ($query){
            return $query->where('name', 'LIKE', "%{$this->buscar}%")
            ->orWhere('documento', 'LIKE', "%{$this->buscar}%")
            ->orWhere('ciudad', 'LIKE', "%{$this->buscar}%")
            ->orWhere('email', 'LIKE', "%{$this->buscar}%")
            ->orWhere('direccion', 'LIKE', "%{$this->buscar}%")
            ->orWhere('celular', 'LIKE', "%{$this->buscar}%");
        })
        ->orderBy($this->orderBy, 'asc')
        ->paginate($this->paginate);
        return view('livewire.todos-clientes',['clientes' => $clientes]);
    }
}
