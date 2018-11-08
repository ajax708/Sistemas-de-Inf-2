<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorCuantitativoAnalisis extends Model
{
    //
    protected $table ='valores_cuantitativos_analisis';
    protected $fillable = ['rango_inicial','rango_final','descripcion','parametros_analisis_id'];
    public function parametro(){
    	return $this->belongsTo('App\ParametroAnalisis','parametros_analisis_id');
    }

}
