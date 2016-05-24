<?php

namespace Almacen;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id_funcionario'];
    protected $fillable = [
        'name','lastname','documento', 'email', 'password','fecha_nacimiento','phone','address','grupo_sanguineo','cargo_id','perfil_id','oficina_id'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];

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
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
