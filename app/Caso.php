<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    protected $table= "casos";

    protected $fillable= ['ultimoPeriodo',
    						'fechaProbable',
    						'reglas',
    						'antecedentes',
    						'ptialismo',
    						'pirosis',
    						'nauseas',
    						'vomitos',
    						'cefalea',
    						'mareos',
    						'insomnios',
    						'estrenimiento',
    						'otros',
    						'prueba',
    						'fechaPrueba',
    						'resultadoPrueba',
    						'citologia',
    						'tratamiento',
    						'codigoPaciente'];

    public function paciente(){
        return $table->belongsTo('App\paciente');
    }

     public function sucesivos()
    {
        return $this->hasMany('App\Sucesivo');
    }

     public function fisicos()
    {
        return $this->hasMany('App\Fisico');
    }

     public function complementarios()
    {
        return $this->hasMany('App\Complementario');
    }
}
