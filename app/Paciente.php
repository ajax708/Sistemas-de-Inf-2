<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
     public function persona()
    {
        return $this->belongsTo('App\Persona','id');
    }
    public function seguros()
    {
        return $this->hasMany('App\Seguro');
    }
}
