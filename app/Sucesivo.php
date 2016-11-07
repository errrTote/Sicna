<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucesivo extends Model
{
    protected $table= "sucesivos";

    protected $fillable= ['fechaExamen',
    						'peso',
    						'arterial'
    						'pesoFetal',
    						'ucc',
    						'presentacion',
    						'fcf',
    						'alturaUterina',
    						'semanaEmbarazo',
    						'codigoCaso'];

    public function caso(){
         return $this->belongsTo('App\Caso');
    }
}
