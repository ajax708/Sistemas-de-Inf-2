<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $fillable = ['analisis_id','orden_id','parametros_analisis_id','valor','observaciones'];

     public function parametro(){
    	return $this->belongsTo('App\ParametroAnalisis','parametros_analisis_id');
    }
    public function analisis(){
    	return $this->belongsTo('App\Analisis','analisis_id');
    }
    public function orden(){
    	return $this->belongsTo('App\Orden','orden_id');
    }
}
