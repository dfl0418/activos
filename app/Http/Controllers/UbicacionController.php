<?php namespace Almacen\Http\Controllers;


use Almacen\Http\Requests;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\UbicacionForm;

use Illuminate\Http\Request;
use Almacen\Ubicacion;
use Almacen\Activo;
use Almacen\Oficina;



class UbicacionController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $ubicaciones = Ubicacion::paginate(5);
        return view("ubicacion.index")->with('ubicacion', $ubicaciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $activos = Activo::lists('nombre_activo', 'id_activo');
        $oficinas = Oficina::lists('nombre_oficina', 'id_oficina');
        return view("ubicacion.create")->with('activo', $activos)->with('oficina', $oficinas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $ubicaciones = new Ubicacion();
        $ubicaciones->fecha_ingreso = \Request::input('fecha_ingreso');       
        $ubicaciones->activo_id = \Request::input('activo_id');
        $ubicaciones->oficina_id = \Request::input('oficina_id');
        $ubicaciones->save();
        return redirect('oficina/create')->with('message', 'la oficina fue  Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_oficina
     * @return Response
     */
    public function show($id_oficina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id_oficina
     * @return Response
     */
    public function edit($id_oficina)
    {
        $ubicaciones  = Ubicacion::find($id_oficina);
        $oficinas = Oficina::lists('nombre_oficina', 'id_oficina');
        return view("ubicacion.create")->with('oficina_id',
            $oficinas)->with('oficina',$ubicaciones);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id_oficina
     * @return Response
     */
    public function update($id_oficina)
    {
        $ubicaciones = Ubicacion::find($id_oficina);
        $ubicaciones->nombre_oficina = \Request::input('nombre');
        $ubicaciones->id_oficina = \Request::input('oficina_id');
        $ubicaciones->save();
        return redirect()->route('ubicacion.index')->with('message', "Los datos de {$ubicaciones->nombre_oficina} han sido actulizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_oficina
     * @return Response
     */
    public function destroy($id_oficina)
    {
        $ubicaciones= Ubicacion::find($id_oficina);
        $ubicaciones->delete();

        return redirect()->route('ubicacion.index')->with('message', "El Ubicacion {$ubicaciones->nombre_oficina} ha sido eliminado" );
    }




}
