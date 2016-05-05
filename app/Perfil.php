<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //
    protected $table = 'perfiles';
    protected $guarded = ['id_perfil'];
    protected $fillable = ['nombre_perfil'];

    
}
