<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPQR extends Model
{
    protected $table    = 'tipo_p_q_r_s';

    protected $guarded  = [];

    public function pqrs(){
        return $this->hasMany('App\PQR');
    }
}
