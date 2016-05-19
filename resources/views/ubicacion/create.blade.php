@extends('home')
@section('content')


    <div class="row">
        <div class="col-sm-2">
            <h4><strong><A>Ubicaciones</A></strong></h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Ubicaciones</div>

                    @if($errors->has())
                        <div class='alert alert-danger'>

                        </div>
                    @endif

                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif



                    <div class="panel-body">
                        @if(isset($ubicaciones))
                            {!! Form::model($ubicaciones, ['route' => ['ubicacion.update', $ubicaciones->id_ubicacion], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
                        @else
                            {!! Form::open(['route' => 'ubicacion.store',  'class' => 'form-horizontal', 'method' => 'post']) !!}
                        @endif

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Fecha Ingreso </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="fecha_ingreso" value="{{ old('fecha_ingreso') }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Fecha Salida </label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="fecha_salida" value="{{ old('fecha_salida') }}">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Activo</label>
                            <div class="col-sm-10">

                                {!! Form::select('activo_id', $activo,null, ["class" => "form-control"]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Oficinas</label>
                            <div class="col-sm-10">
                                {!! Form::select('oficina_id', $oficina,null, ["class" => "form-control"]) !!}
                            </div>
                        </div>


                        <div class="form-group">
                            {!! Form::submit('Send', ["class" => "btn btn-success btn-block"]) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 pull-right">
                {!! Html::link(route('ubicacion.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
            </div>
        </div>
    </div>
@endsection
