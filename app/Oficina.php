<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;
use Almacen\Sede;
use Almacen\CentroCosto;

class Oficina extends Model
{
    //
    protected $guarded = ['id_oficina'];
    protected $fillable = ['nombre_oficina','latitud', 'longitud'];
   
    public function sedes()
    {
        return $this->belongsTo('eps\Sede', 'sede_id', 'id_sede'); // 1:N
    }
    public function centro_costos()
    {
        return $this->belongsTo('eps\CentroCosto', 'centro_costo_id', 'id_centro_costo'); // 1:N
    }
}
