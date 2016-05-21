<?php

namespace Almacen\Http\Controllers;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\PerfilForm;
use Illuminate\Http\Request;
use Almacen\Perfil;
use Almacen\Http\Requests;

class PerfilController extends Controller
{
    //
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $perfiles=Perfil::paginate(5);
        return view("perfil.index")->with('perfiles',$perfiles);
    }
    
    public function create()
    {
        return view("perfil.create");
    }
    
    public function store()
    {
        $perfiles=new Perfil();
        $perfiles->nombre_perfil=\Request::input('nombre_perfil');
        $perfiles->save();
        return redirect('perfil')->with('message','el perfil fue creado');
    }
    
    
    public function show($id_perfil){
        
    }
    
    public  function edit ($id_perfil){
    $perfiles=Perfil::find($id_perfil);
        return view("perfil.create")->with('perfil',$perfiles);
        
    }
    
    
    public function update($id_perfil)
    {
        $perfiles=Perfil::find($id_perfil);
        $perfiles->nombre_perfil=Requests::inpuct('nombre_perfil');
        $perfiles->save();
        redirect()-route('perfil.index')->with('mesage',"los datos de {$perfiles->nombre_perfil}ha sido actulizados");
    }
    
    
}
