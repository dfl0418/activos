<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;

class CentroCosto extends Model
{
    //
    protected $guarded = ['id_centro_costo'];
    protected $fillable = ['nombre_centro_costo'];

    
}
