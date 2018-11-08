<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorCualitativoAnalisis extends Model
{
    //
    protected $table ='valores_cualitativos_analisis';

    protected $fillable = ['valor','parametros_analisis_id'];
    public function parametro(){
    	return $this->belongsTo('App\ParametroAnalisis','parametros_analisis_id');
    }
}
