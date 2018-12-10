<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $fillable = [
        'id','cod_empleado','telefono_laboral','antiguedad','estado'
    ];
    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }
     public function persona()
    {
        return $this->belongsTo('App\Persona','id');
    }
}
