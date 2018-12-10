<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'user_id','nombre', 'apellido', 'ci','genero','email','telefono','celular',
    ];
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
