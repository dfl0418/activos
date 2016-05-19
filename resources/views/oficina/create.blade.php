@extends('home')
@section('content')


    <div class="row">
        <div class="col-sm-2">
            <h4><strong><A>Oficina</A></strong></h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Oficina</div>

                    @if($errors->has())
                        <div class='alert alert-danger'>

                        </div>
                    @endif

                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif



                    <div class="panel-body">
                        @if(isset($oficinas))
                            {!! Form::model($oficinas, ['route' => ['oficina.update', $oficinas->id_oficina], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
                        @else
                            {!! Form::open(['route' => 'oficina.store',  'class' => 'form-horizontal', 'method' => 'post']) !!}
                        @endif

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                {!! Form::text('nombre_oficina', @$oficinas->nombre_oficina, ["class" => "form-control"]) !!}
                            </div>
                        </div>



                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Latitud </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="latitud" value="{{ old('latitud') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Longitud</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="longitud" value="{{ old('longitud') }}">
                                </div>
                            </div>




                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sede</label>
                            <div class="col-sm-10">

                                {!! Form::select('sede_id', $sede,null, ["class" => "form-control"]) !!}
                            </div>
                        </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Centro de Costos</label>
                                <div class="col-sm-10">
                                    {!! Form::select('centro_costo_id', $centro_costo,null, ["class" => "form-control"]) !!}
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
                {!! Html::link(route('oficina.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
            </div>
        </div>
    </div>
@endsection
