<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table= "Log";

    protected $fillable=['modulo', 
    						'accion', 
    						'item', 
    						'fecha', 
    						'hora', 
    						'codigoUsuario'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
