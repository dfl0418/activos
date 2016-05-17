<?php namespace Almacen\Http\Controllers;

use Almacen\Categoria;
use Almacen\Http\Requests;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\ActivoForm;

use Illuminate\Http\Request;
use Almacen\Activo;



class ActivoController extends Controller {

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
        $activos = Activo::paginate(5);
        return view("activo.index")->with('activos', $activos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $categorias = Categoria::lists('nombre_categoria', 'id_categoria');
        
        return view("activo.create")->with('categoria', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $activos = new Activo();
        $activos->nombre_activo = \Request::input('nombre_activo');
        $activos->descripcion = \Request::input('descripcion');
        $activos->observacion = \Request::input('observacion');
        $activos->numero_inventario = \Request::input('numero_inventario');
        $activos->fecha_compra = \Request::input('fecha_compra');
        $activos->valor_activo = \Request::input('valor_activo');
        $activos->categoria_id = \Request::input('categoria');
        $activos->save();
        return redirect('activo/create')->with('message', 'El activo fue  Creado');
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
        $activos  = Activo::find($id);
        $categorias = Categoria::lists('nombre_categoria', 'id_categoria');
        return view("activo.create")->with('categoria',
            $categorias)->with('activo',$activos);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $activos = Activo::find($id);
        $activos->nombre_activo = \Request::input('nombre');
        $activos->id_categoria = \Request::input('categoria');
        $activos->save();
        return redirect()->route('activo.index')->with('message', "Los datos de {$activos->nombre_activo} han sido actulizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $activos= Activo::find($id);
        $activos->delete();

        return redirect()->route('activo.index')->with('message', "El Activo {$activos->nombre_activo} ha sido eliminado" );
    }




}
