<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;
use Almacen\Cargo;
use Almacen\Perfil;
class Funcionario extends Model
{
    //
    protected $guarded = ['id_funcionario'];
    protected $fillable = ['nombre_funcionario','apellido_funcionario', 'cedula_funcionario','fecha_nacimiento','dirrecion_funcionario','telefono','usuario','password'];

    public function cargos()
    {
        return $this->belongsTo('Almacen\Cargo', 'cargo_id', 'id_cargo'); // 1:N
    }
    public function perfiles()
    {
        return $this->belongsTo('Almacen\Perfil', 'perfil_id', 'id_perfil'); // 1:N
    }
}
