<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    protected $fillable = [
        'clave','nombre','area_id','estado'
    ];
    protected $table ='analisis';


     public function clasificacion(){
    	return $this->belongsTo('App\Clasificacion');
    }
     public function area(){
    	return $this->belongsTo('App\Area');
    }
    public function lista_precio(){
    	return $this->belongsToMany('App\ListaPrecio', 'lista_precio_analisis', 'analisis_id', 'listaprecio_id')->withTimestamps()->withPivot('valor');
    }
    public function ordenes(){
        return $this->belongsToMany('App\Orden', 'detalle_orden')->withTimestamps()->withPivot('precio_venta','estado');
    }
    public function parametros(){
        return $this->hasMany('App\ParametroAnalisis','analisis_id');
    }
}
