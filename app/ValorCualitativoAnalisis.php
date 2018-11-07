<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorCualitativoAnalisis extends Model
{
    //
    protected $table ='valores_cualitativos_analisis';
    public function parametro(){
    	return $this->belongsTo('App\ParametroAnalisis');
    }
}
