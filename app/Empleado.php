<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados";

    protected $fillable= ['funcion',
    						'seguroSocial',
    						'codigoPersona'];

    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function cita(){
        return $this->belongsTo('App\Cita');
    }
}
