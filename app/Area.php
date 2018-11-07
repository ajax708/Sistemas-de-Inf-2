<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    public function laboratorios(){
    	return $this->belongsTo('App\LaboratorioClinico');
    }
    public function empleados()
    {
        return $this->belongsToMany('App\Empleado');
    }
}
