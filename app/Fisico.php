<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fisico extends Model
{
    protected $table= "fisicos";

    protected $fillable= ['mamas',
    						'cardiovascular',
    						'varices',
    						'ginecologico',
    						'codigoCaso'];

    public function caso(){
         return $this->belongsTo('App\Caso');
    }
}
