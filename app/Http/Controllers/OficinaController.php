<?php namespace Almacen\Http\Controllers;


use Almacen\Http\Requests;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\OficinaForm;

use Illuminate\Http\Request;
use Almacen\Oficina;
use Almacen\Sede;
use Almacen\CentroCosto;



class OficinaController extends Controller {

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
        $oficinas = Oficina::paginate(5);
        return view("oficina.index")->with('oficinas', $oficinas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $sede = Sede::lists('municipio', 'id_sede');
        $centro_costo = CentroCosto::lists('nombre_centro_costo', 'id_centro_costo');
        return view("oficina.create")->with('sede', $sede)->with('centro_costo', $centro_costo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $oficinas = new Oficina();
        $oficinas->nombre_oficina = \Request::input('nombre_oficina');
        $oficinas->latitud = \Request::input('latitud');
        $oficinas->longitud = \Request::input('longitud');
        $oficinas->sede_id = \Request::input('sede_id');
        $oficinas->centro_costo_id = \Request::input('centro_costo_id');
        $oficinas->save();
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
        $oficinas  = Oficina::find($id_oficina);
        $centro_costos = CentroCosto::lists('nombre_centro_costo', 'id_centro_costo');
        return view("oficina.create")->with('centro_costo_id',
            $centro_costos)->with('oficina',$oficinas);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id_oficina
     * @return Response
     */
    public function update($id_oficina)
    {
        $oficinas = Oficina::find($id_oficina);
        $oficinas->nombre_oficina = \Request::input('nombre');
        $oficinas->id_centro_costo = \Request::input('centro_costo_id');
        $oficinas->save();
        return redirect()->route('oficina.index')->with('message', "Los datos de {$oficinas->nombre_oficina} han sido actulizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_oficina
     * @return Response
     */
    public function destroy($id_oficina)
    {
        $oficinas= Oficina::find($id_oficina);
        $oficinas->delete();

        return redirect()->route('oficina.index')->with('message', "El Oficina {$oficinas->nombre_oficina} ha sido eliminado" );
    }




}
