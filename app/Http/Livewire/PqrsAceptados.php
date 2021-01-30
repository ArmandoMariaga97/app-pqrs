<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\PQR;
use Illuminate\Support\Str;

use Livewire\Component;

// necesario para la carga de archivos
use Livewire\WithFileUploads;

class PqrsAceptados extends Component
{
    //necesario par al accraga de archivos
    use WithFileUploads;

    public $form_respuesta = false;
    public $pqrs_id;
    public $respuesta, $archivo_respuesta = 'vacio';

    public function render()
    {
        $pqrs_aceptados = PQR::where('asesor', auth()->user()->id)
                                ->where('estado','2')
                                ->with(['clienteCreador','tipoRadicado','asesorPqrs'])->orderBy('id','desc')->get();

        return view('livewire.asesores_pqrs.pqrs-aceptados',['pqrs_aceptados' => $pqrs_aceptados]);
    }

    public function mostarform($id){
        $this->pqrs_id = $id;
        $this->form_respuesta = !$this->form_respuesta;
    }

    public function enviarRespuesta($id_pqrs){

        if($this->archivo_respuesta == 'vacio'){

            $this->validate([
                'respuesta' => 'required',
            ]);

            $pqrs_old = PQR::find($id_pqrs);
            $pqrs_old->descripcion_respuesta = $this->respuesta;
            $pqrs_old->estado = '3';
            $pqrs_old->save();

            session()->flash('respuesta','ok');

        }else{

            $this->validate([
                'respuesta' => 'required',
            ]);

            $random = Str::random(30);
            $file = $this->archivo_respuesta->getClientOriginalName();
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $url_archivo = $random.'.'.$extension;

            $this->archivo_respuesta->storeAs('archivos' , $url_archivo);

            $pqrs_old = PQR::find($id_pqrs);
            $pqrs_old->descripcion_respuesta = $this->respuesta;
            $pqrs_old->archivo_respuesta = $url_archivo;
            $pqrs_old->estado = '3';
            $pqrs_old->save();

            session()->flash('respuesta','ok');

        }
    }
}
