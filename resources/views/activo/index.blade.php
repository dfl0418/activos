@extends('home')
@section('content')


    <div class="row">
        <div class="col-sm-2">
            <h4><strong><A>Activos</A></strong></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 pull-right">
            {!! Html::link(route('activo.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
        </div>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif


    @if(!$activos->isEmpty())
        <table class="table table-striped">

            <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Numero Inventario</th>
                <th>Fecha Compra</th>
                <th>Categoria</th>

                <th width="60" align="center"></th>
                <th width="60" align="center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($activos as $activos)
                <tr>

                    <td>{{ $activos->nombre_activo}}</td>
                    <td>{{ $activos->descripcion}}</td>
                    <td>{{ $activos->numero_inventario}}</td>
                    <td>{{ $activos->fecha_compra}}</td>
                    <td>{{ $activos->categorias->nombre_categoria }}</td>
                    <td>
                        {!! Html::link(route('activo.edit', $activos->id), 'Actualizar', array('class' => 'btn btn-success btn-sm')) !!}
                    </td>
                    <td>
                        {!! Form::open(array('route' => array('activo.destroy', $activos->id), 'method' => 'DELETE')) !!}
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>


        </table>

    @endif
@endsection
