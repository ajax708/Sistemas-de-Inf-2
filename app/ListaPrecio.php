<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaPrecio extends Model
{
    //
     public function analisis(){
    	return $this->belongsToMany('App\Analisis', 'lista_precio_analisis', 'listaprecio_id', 'analisis_id')->withTimestamps()->withPivot('valor');
    }
}
