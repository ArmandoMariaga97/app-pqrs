<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\User;
use Illuminate\Support\Facades\Hash;



class AsesoresComponent extends Component
{
    public $open_form = false;
    public $form_edit = false;
    public $id_asesor, $name, $documento, $email, $celular, $ciudad, $direccion;

    public $buscar = '';
    public $paginate = 5;
    public $orderBy = 'documento';
    public $cont = 1;

    public function render()
    {
        $asesores = User::where('rol','2')
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
        return view('livewire.asesores.asesores-component', ['asesores' => $asesores]);
    }

    
    public function registrar(){
        $this->validate([
            'name'    => 'required|string',
            'email'    => 'required|email',
            'documento' => 'required|numeric|digits_between:5,15',
            'celular' => 'required|numeric|digits_between:5,15',
            'ciudad' => 'required|string',
            'direccion' => 'required|string',
        ]);

        $datos = [
            'name'          => $this->name,
            'email'         => $this->email,
            't_documento'   => 'Cédula de ciudadania',
            'documento'     => $this->documento,
            'ciudad'        => $this->ciudad,
            'celular'        => $this->celular,
            'direccion'     => $this->direccion,
            'rol'           => '2',
            'password'      => Hash::make($this->documento),
        ];

        User::create($datos);

        $this->limpiarcampos();
        session()->flash('register_success', 'ok');
    }

    public function edit($id){

        $this->form_edit = true;
        $this->id_asesor  = $id;

        $asesor = User::find($id);

        $this->name      = $asesor->name;
        $this->email     = $asesor->email;
        $this->ciudad    = $asesor->ciudad;
        $this->celular   = $asesor->celular;
        $this->documento = $asesor->documento;
        $this->direccion = $asesor->direccion;

    }

    public function update(){

        $this->validate([
            'name'    => 'required|string',
            'email'    => 'required|email',
            'documento' => 'required|numeric|digits_between:5,15',
            'celular' => 'required|numeric|digits_between:5,15',
            'ciudad' => 'required|string',
            'direccion' => 'required|string',
        ]);

        $asesor_old = User::find($this->id_asesor);
        $asesor_old->name = $this->name;
        $asesor_old->email = $this->email;
        $asesor_old->documento = $this->documento;
        $asesor_old->celular = $this->celular;
        $asesor_old->ciudad = $this->ciudad;
        $asesor_old->direccion = $this->direccion;

        $asesor_old->save();

        $this->limpiarcampos();
        session()->flash('update-success', 'ok');
    }

    public function destroy($id){
        User::destroy($id);

        session()->flash('delete-success', 'ok');
    }

    public function limpiarcampos(){
        $this->form_edit = false;
        $this->open_form = false;
        $this->id_asesor = '';
        $this->reset('name','documento', 'email', 'celular', 'ciudad', 'direccion');
    }

}
