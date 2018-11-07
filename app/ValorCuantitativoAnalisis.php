<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorCuantitativoAnalisis extends Model
{
    //
    protected $table ='valores_cuantitativos_analisis';
    public function parametro(){
    	return $this->belongsTo('App\ParametroAnalisis');
    }

}
