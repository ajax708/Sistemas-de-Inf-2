<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaboratorioClinico extends Model
{
    /**
     * Obtiene las areas de un laboratorio
     */
    public function areas()
    {
        return $this->hasMany('App\Area','laboratorio_clinico_id');
    }
}
