@extends('home')
@section('content')


    <div class="row">
        <div class="col-sm-2">
            <h4><strong><A>Activos</A></strong></h4>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Activo</div>

                    @if($errors->has())
                        <div class='alert alert-danger'>
                            @foreach ($errors->all('<p>:message</p>') as $message)
                                {!! $message !!}
                            @endforeach
                        </div>
                    @endif

                    @if (Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message') }}</div>
                    @endif



                    <div class="panel-body">
                        @if(isset($activos))
                            {!! Form::model($activos, ['route' => ['activo.update', $activos->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
                        @else
                            {!! Form::open(['route' => 'activo.store',  'class' => 'form-horizontal', 'method' => 'post']) !!}
                        @endif

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                {!! Form::text('nombre_activo', @$activos->nombre_activo, ["class" => "form-control"]) !!}
                            </div>
                        </div>


                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Descripcion Activo</label>
                                <div class="col-sm-10">
                                    {!! Form::text('descripcion', @$activos->descripcion, ["class" => "form-control"]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Numero De Inventario </label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="numero_inventario" value="{{ old('numero_inventario') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Fecha Compra </label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha_compra" value="{{ old('fecha_compra') }}">
                                </div>
                            </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
                            <div class="col-sm-10">
                                {!! Form::select('categoria', @$categoria,null, ["class" => "form-control"]) !!}
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
                {!! Html::link(route('activo.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
            </div>
        </div>
    </div>
@endsection
