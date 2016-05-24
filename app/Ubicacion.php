<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //
    protected $table = 'ubicaciones';
    protected $guarded = ['id_ubicacion'];
    protected $fillable = ['fecha_ingreso','fecha_salida','activo_id','oficina_id'];

  

    public function activos()
    {
        return $this->belongsTo('Almacen\Activo', 'activo_id', 'id_activo'); // 1:N
    }
    public function oficinas()
    {
        return $this->belongsTo('Almacen\Oficina', 'oficina_id', 'id_oficina'); // 1:N
    }
}
