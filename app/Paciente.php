<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'id','cod_paciente' ,'fecha_nacimiento', 'antiguedad','ultima_solicitud'
    ];
     public function persona()
    {
        return $this->belongsTo('App\Persona','id');
    }
    public function seguros()
    {
        return $this->hasMany('App\Seguro');
    }
}
