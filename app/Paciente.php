<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table= "pacientes";

    protected $fillable = ['ocupacion',
    						'sangre',
    						'gestas',
    						'paras',
    						'abortos',
    						'curetajes',
    						'prematuros',
    						'ectopicos',
    						'molar',
    						'cesareas',
    						'menarquia',
    						'parejas',
    						'antecedentesHereditarios',
    						'codigoPersona'];

    public function persona(){
        return $this->belongsTo('App\Persona');
    }

    public function cita(){
        return $this->belongsTo('App\Cita');
    }

    public function caso(){
        return $table->hasOne('App/Caso');
    }
}
