<?php

namespace Almacen\Http\Controllers;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\CargoForm;
use Illuminate\Http\Request;
use Almacen\Cargo;


use Almacen\Http\Requests;

class CargoController extends Controller
{
    //
    
    
    
    public function __construct()
{
    $this->middleware('auth');
}
    
    public function index()
    {
        $cargos=Cargo::paginate(5);
        return view("cargo.index")->with('cargos',$cargos);
    }
    
    public function create()
    {
        return view("cargo.create");
    }
    
    public function store()
    {
        $cargos=new Cargo();
        $cargos->nombre_cargo=\Request::input('nombre_cargo');
        $cargos->save();
        return redirect('cargo')->with('message','El cargo fue creado');
    }

    public function show($id_cargo)
    {
        //
    }
    public function edit($id_cargo)
    {
    $cargos=Cargo::find($id_cargo);
        return view("cargos.create")->with('cagos',$cargos);
    }
    
    public function update($id_cargo)
    {
        $cargos=Cargo::find($id_cargo);
        $cargos->nombre_cargo=Requests::inpuct('nombre_cargo');
        $cargos->save();
        return redirect()-route('cargos.index')->with('message',"los datos de {$cargos->nombre_cargo} han sido actulizado");
    }
    public function destroy($id_cargo)
    {
        $cargos=Cargo::find($id_cargo);
        $cargos->delete(); 
        redirect()->route('cargo.index')->with('message',"El cargo{$cargos->nombre_cargo} ha sido eliminado");
    }
  

}
