<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complementario extends Model
{
    protected $table= "complementarios";

    protected $fillable= ['fechaExamne',
    						'hb', 
    						'hto',
    						'leucocitos',
    						'glicemia',
    						'urea',
    						'creatinina',
    						'vdrl',
    						'orina',
    						'hiv',
    						'toxoTest',
    						'hepatitis',
    						'codigoCaso'];

    public function caso(){
         return $this->belongsTo('App\Caso');
    }
}
