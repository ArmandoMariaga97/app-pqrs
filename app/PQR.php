<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PQR extends Model
{
    protected $table    = 'p_q_r_s';

    protected $guarded  = [];

    public function tipoRadicado(){
        return $this->hasOne('App\TipoPQR','id','t_pqr');
    }

    public function clienteCreador(){
        return $this->hasOne('App\User','id','user_creador');
    }

    public function asesorPqrs(){
        return $this->hasOne('App\User','id','asesor');
    }
}
