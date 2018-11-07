<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    //
    protected $table ='unidades_medida';

    public function parametros_analisis()
    {
        return $this->hasMany('App\ParametroAnalisis');
    }
}
