<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
	protected $fillable = [
        'user_id','fecha_nacimiento','estado_civil','genero'
    ];
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function seguros()
    {
        return $this->hasMany('App\Seguro');
    }
}
