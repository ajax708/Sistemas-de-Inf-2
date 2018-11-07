<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguro extends Model
{
     public function paciente(){
    	return $this->belongsTo('App\Paciente');
    }
     public function aseguradora(){
    	return $this->belongsTo('App\Aseguradora');
    }
}
