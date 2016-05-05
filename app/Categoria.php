<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $guarded = ['id_categoria'];
    protected $fillable = ['nombre_categoria'];

    
}
