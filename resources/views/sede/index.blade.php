@extends('home')
@section('content')


    <div class="row">
        <div class="col-sm-2">
            <h4><strong><A>Sedes</A></strong></h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 pull-right">
            {!! Html::link(route('sede.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
        </div>
    </div>

    @if (Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif


    @if(!$sede->isEmpty())
        <table class="table table-striped">

            <thead>
            <tr>
                <th>Nombre</th>
                <th width="60" align="center"></th>
                <th width="60" align="center"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($sede as $sedes)
                <tr>

                    <td>{{ $sedes->municipio}}</td>

                    <td>
                        {!! Html::link(route('sede.edit', $sedes->id_sede), 'Actualizar', array('class' => 'btn btn-success btn-sm')) !!}
                    </td>
                    <td>
                        {!! Form::open(array('route' => array('sede.destroy', $sedes->id_sede), 'method' => 'DELETE')) !!}
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>


        </table>

    @endif
@endsection
