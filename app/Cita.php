<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table= "citas";

    protected $fillable= ['fecha', 
    						'hora',
    						'confirmada',
    						'servicio',
    						'codigoPaciente',
    						'codigoEmpleado'];


    public function paciente(){
        return $this->hasOne('App\Paciente');
    }

    public function empleado(){
        return $this->hasOne('App\Empleado');
    }
}

