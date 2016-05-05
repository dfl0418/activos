<?php namespace Almacen\Http\Controllers;

use Almacen\Http\Requests;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\CentroCostoForm;

use Illuminate\Http\Request;
use Almacen\CentroCosto;



class CentroCostoController extends Controller {

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
        $centro_costos =CentroCosto::paginate(5);
        return view("centrocosto.index")->with('centrocosto', $centro_costos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("centrocosto.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $centro_costos = new CentroCosto();


        $centro_costos->nombre_centro_costo = \Request::input('nombre_centro_costo');

        $centro_costos->save();
        return redirect('centrocosto/create')->with('message', 'centrocosto Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $centro_costos  = CentroCosto::find($id);
        return view("centrocosto.create")->with('facultad',$centro_costos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $centro_costos = CentroCosto::find($id);
        $centro_costos->nombre_centro_costo = \Request::input('nombre_centro_costo');

        $centro_costos->save();
        return redirect()->route('centrocosto.index')->with('message', "Los datos de {$centro_costos->nombre} han sido actulizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $centro_costos = CentroCosto::find($id);
        $centro_costos->delete();

        return redirect()->route('centrocosto.index')->with('message', "facultad {$centro_costos->nombre} ha sido eliminado" );
    }

}

