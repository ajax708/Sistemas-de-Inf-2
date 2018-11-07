<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }
     public function persona()
    {
        return $this->belongsTo('App\Persona','id');
    }
}
