<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;
use Almacen\Categoria;

class Activo extends Model
{
    //
    protected $guarded = ['id_activo'];
    protected $fillable = ['nombre_activo','descripcion', 'numero_inventario','fecha_compra'];
    
    public function categorias()
    {
        return $this->belongsTo('Almacen\Categoria', 'categoria_id', 'id_categoria'); // 1:N
    }
}
