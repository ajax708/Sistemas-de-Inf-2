<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function paciente()
    {
        return $this->hasOne('App\Paciente','id');
    }
    public function medico()
    {
        return $this->hasOne('App\Medico','id');
    }
    public function empleado()
    {
        return $this->hasOne('App\Empleado','id');
    }
}
