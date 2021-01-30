<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;
use Illuminate\Support\Str;

use Livewire\Component;
use App\TipoPQR;
use App\PQR;

use Illuminate\Support\Facades\Session;
use App\Mail\CreatePQRS;
use Illuminate\Support\Facades\Mail;

// necesario para la carga de archivos
use Livewire\WithFileUploads;

class NuevoPqrs extends Component
{

    //necesario par al accraga de archivos
    use WithFileUploads;


    public $confir_envio_pqrs = false, $t_pqrs, $descripcion_pqrs, $radicado, $archivo_solicitud;

    public function render()
    {
        $tipos_pqrs = TipoPQR::orderBy('id','asc')->get();
        return view('livewire.cliente.nuevo-pqrs',['tipos'=>$tipos_pqrs]);
    }

    public function enviarPQRS(){

        $fecha = Carbon::now();
        $mfecha = $fecha->month;
        $dfecha = $fecha->day;
        $afecha = $fecha->year;

        $ran_radicado = Str::random(5);

        $url_archivo = 'No se cargó ningun archivo';

        if($this->archivo_solicitud != ''){

            $this->validate([
                't_pqrs' => 'required',
                'descripcion_pqrs' => 'required | string',
                'archivo_solicitud' => 'required | max:2024',
            ]);

            $random = Str::random(30);
            $file = $this->archivo_solicitud->getClientOriginalName();
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            $url_archivo = $random.'.'.$extension;
    
            $this->archivo_solicitud->storeAs('archivos' , $url_archivo);
        }else{

            $this->validate([
                't_pqrs' => 'required',
                'descripcion_pqrs' => 'required | string',
            ]);
        }
        
        PQR::create([
            'radicado' => $ran_radicado,
            't_pqr' => $this->t_pqrs,
            'user_creador' => auth()->user()->id,
            'descripcion_solicitud' => $this->descripcion_pqrs,
            'archivo_solicitud' => $url_archivo,
            'estado' => '1',
        ]);

        $alter_radicado = PQR::where('radicado',$ran_radicado)->first();

        $this->radicado = $mfecha.$dfecha.$alter_radicado->id;

        $alter_radicado->radicado = $mfecha.$dfecha.$alter_radicado->id;

        $alter_radicado->save();
        
        $datos = [
            'radicado' => $this->radicado,
            'nombre' => auth()->user()->name,
            'correo' => auth()->user()->email,
            'telefono' => auth()->user()->celular,
            'ciudad' => auth()->user()->ciudad,
            'direccion' => auth()->user()->direccion,
            't_pqrs' => $this->t_pqrs,
            'descripcion_pqrs' => $this->descripcion_pqrs,
        ];


        // envio de emaill
        Mail::to(auth()->user()->email)->queue(new CreatePQRS($datos));

        $this->reset('t_pqrs','descripcion_pqrs');

        $this->confir_envio_pqrs = true;

        session()->flash('envio_pqrs','ok');
    }
}
