<?php namespace Almacen\Http\Controllers;

use Almacen\Http\Requests;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\SedeForm;

use Illuminate\Http\Request;
use Almacen\Sede;



class SedeController extends Controller {

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
        $sedes =Sede::paginate(5);
        return view("sede.index")->with('sede', $sedes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("sede.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $sedes = new Sede();


        $sedes->municipio = \Request::input('municipio');

        $sedes->save();
        return redirect('sede/create')->with('message', 'sede Creado');
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
        $sedes  = Sede::find($id);
        return view("sede.create")->with('sede',$sedes);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $sedes = Sede::find($id);
        $sedes->nombre_sede = \Request::input('nombre_sede');

        $sedes->save();
        return redirect()->route('sede.index')->with('message', "Los datos de {$sedes->nombre} han sido actulizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $sedes = Sede::find($id);
        $sedes->delete();

        return redirect()->route('sede.index')->with('message', "facultad {$sedes->nombre} ha sido eliminado" );
    }

}

