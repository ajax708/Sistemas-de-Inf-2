<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DetalleOrden extends Pivot
{
    //
    protected $guarded = ['_token','id'];
}
