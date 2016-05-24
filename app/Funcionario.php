<?php

namespace Almacen;

use Illuminate\Database\Eloquent\Model;
use Almacen\Cargo;
use Almacen\Perfil;
use Almacen\Oficina;
use Almacen\User;
class Funcionario extends Model
{
    //
    protected $guarded = ['id_funcionario'];
    protected $fillable = ['users_id','cargo_id',''];
    public function user(){
        return $this->hasOne('eps\User', 'id', 'users_id','perfil_id','oficina_id'); // 1:1
    }

    public function cargos()
    {
        return $this->belongsTo('Almacen\Cargo', 'cargo_id', 'id_cargo'); // 1:N
    }
    public function perfiles()
    {
        return $this->belongsTo('Almacen\Perfil', 'perfil_id', 'id_perfil'); // 1:N
    }


    public function oficinas()
    {
        return $this->belongsTo('Almacen\Oficina', 'oficina_id', 'id_oficina'); // 1:N
    }
   
}
