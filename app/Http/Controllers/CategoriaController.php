<?php namespace Almacen\Http\Controllers;

use Almacen\Http\Requests;
use Almacen\Http\Controllers\Controller;
use Almacen\Http\Requests\CategoriaForm;

use Illuminate\Http\Request;
use Almacen\Categoria;



class CategoriaController extends Controller {

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
        $categorias =Categoria::paginate(5);
        return view("categoria.index")->with('categoria', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $categorias = new Categoria();


        $categorias->nombre_categoria = \Request::input('nombre_categoria');

        $categorias->save();
        return redirect('categoria')->with('message', 'categoria Creado');
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
        $categorias  = Categoria::find($id);
        return view("categoria.create")->with('categoria',$categorias);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $categorias = Categoria::find($id);
        $categorias->nombre_categoria = \Request::input('nombre_categoria');

        $categorias->save();
        return redirect()->route('categoria.index')->with('message', "Los datos de {$categorias->nombre} han sido actulizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();

        return redirect()->route('categoria.index')->with('message', "categoria {$categorias->nombre_categoria} ha sido eliminado" );
    }

}

