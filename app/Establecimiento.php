<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    //
     public function medicos()
    {
        return $this->belongsToMany('App\Medico');
    }
}
