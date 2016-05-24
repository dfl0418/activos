<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;
use Almacen\Sede;
use Almacen\CentroCosto;

class Oficina extends Model
{
    //
    protected $guarded = ['id_oficina'];
    protected $fillable = ['nombre_oficina','latitud', 'longitud','sede_id','centro_costo_id'];
   
    public function sedes()
    {
        return $this->belongsTo('Almacen\Sede', 'sede_id', 'id_sede'); // 1:N
    }
    public function centro_costos()
    {
        return $this->belongsTo('Almacen\CentroCosto', 'centro_costo_id', 'id_centro_costo'); // 1:N
    }
}
