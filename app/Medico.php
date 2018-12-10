<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'id','telefono_laboral', 'antiguedad', 'estado','especialidad',
    ];
     public function persona()
    {
        return $this->belongsTo('App\Persona','id');
    }
    public function establecimientos()
    {
        return $this->belongsToMany('App\Establecimiento');
    }
}
