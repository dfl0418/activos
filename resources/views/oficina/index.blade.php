@extends('home')
@section('content')


    <div class="row">
        <div class="col-sm-2">
            <h4><strong><A>Oficinas</A></strong></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 pull-right">
            {!! Html::link(route('oficina.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
        </div>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif


    @if(!$oficinas->isEmpty())
        <table class="table table-striped">

            <thead>
            <tr>
                <th>Fecha Ingreso</th>
                <th>Fecha Salida </th>
                <th>Activo</th>
                <th>Oficina</th>
                <th>responsable</th>
                <th wid_oficinath="60" align="center"></th>
                <th wid_oficinath="60" align="center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($oficinas as $oficinas)
                <tr>

                    <td>{{ $oficinas->nombre_oficina}}</td>
                    <td>{{ $oficinas->longitud}}</td>
                    <td>{{ $oficinas->latitud}}</td>
                    <td>{{ $oficinas->sedes->municipio}}</td>
                    <td>{{ $oficinas->centro_costos->nombre_centro_costo }}</td>
                    <td>
                        {!! Html::link(route('oficina.edit', $oficinas->id_oficina), 'Actualizar', array('class' => 'btn btn-success btn-sm')) !!}
                    </td>
                    <td>
                        {!! Form::open(array('route' => array('oficina.destroy', $oficinas->id_oficina), 'method' => 'DELETE')) !!}
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>


        </table>

    @endif
@endsection
