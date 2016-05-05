<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    //
    protected $fillable = ['nombre_cargo'];

    protected $guarded = ['id_cargo'];
}
