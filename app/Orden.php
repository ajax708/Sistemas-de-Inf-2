<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $table = 'ordenes';

     public function paciente(){
    	return $this->belongsTo('App\Paciente');
    }
     public function medico(){
    	return $this->belongsTo('App\Medico');
    }
     public function empleado(){
    	return $this->belongsTo('App\Empleado');
    }
     public function establecimiento(){
    	return $this->belongsTo('App\Establecimiento');
    }
     public function seguro(){
    	return $this->belongsTo('App\Seguro');
    }
     public function analisis(){
        return $this->belongsToMany('App\Analisis', 'detalle_orden')->withTimestamps()->withPivot('precio_venta','estado');
    }
}
