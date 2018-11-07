<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParametroAnalisis extends Model
{
    //
    protected $table = 'parametros_analisis';

    protected $fillable = ['nombre','tipo','cant_resultados','unidad_medida_id','analisis_id'];

    public function unidadDeMedida(){
    	return $this->belongsTo('App\UnidadMedida','unidad_medida_id');
    }

    public function analisis(){
    	return $this->belongsTo('App\Analisis','analisis_id');
    }
    public function cuantitativos(){
        return $this->hasMany('App\ValorCuantitativoAnalisis','parametros_analisis_id');
    }
    public function cualitativos(){
        return $this->hasMany('App\ValorCualitativoAnalisis','parametros_analisis_id');
    }
}
