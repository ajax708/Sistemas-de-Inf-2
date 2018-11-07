<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aseguradora extends Model
{
    public function seguros()
    {
        return $this->hasMany('App\Seguro');
    }
}
