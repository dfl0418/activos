<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    //
    protected $guarded = ['id_sede'];
    protected $fillable = ['municipio'];

    
}
