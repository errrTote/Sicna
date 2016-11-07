<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "personas";

    protected $fillable=['cedula',
    					 'primerNombre', 
    					 'segundoNombre', 
    					 'primerApellido', 
    					 'segundoApellido', 
    					 'fechaNacimiento', 
    					 'telefonoMovin', 
    					 'telefonoFijo', 
    					 'direccion', 
    					 'codigoParroquia'];

    public function paciente(){
        return $this->hasOne('App\Paciente');
    }

    public function empleado(){
        return $this->hasOne('App\Empleado');
    }
}
