@extends('home')
@section('content')


	<div class="row">
		<div class="col-sm-2">
			<h4><strong><A>Ubicaciones</A></strong></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 pull-right">
			{!! Html::link(route('ubicacion.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
		</div>
	</div>

	@if (Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif


	@if(!$ubicacion->isEmpty())
		<table class="table table-striped">

			<thead>
			<tr>
				<th>Fecha Ingreso</th>
				<th>Fecha Salida </th>
				<th>Activo</th>
				<th>Descripcion Activo</th>
				<th>Observaciones Activo</th>
				<th>Numero Invetario Activo</th>
				<th>Oficina</th>
				<th>Centro Costo oficina</th>
				<th>Sede</th>
				<th wid="60" align="center"></th>
				<th wid="60" align="center"></th>
			</tr>
			</thead>
			<tbody>
			@foreach ($ubicacion as $ubicaciones)
				<tr>

					<td>{{ $ubicaciones->fecha_ingreso}}</td>
					<td>{{ $ubicaciones->fecha_salida}}</td>
					<td>{{ $ubicaciones->activos->nombre_activo}}</td>
					<td>{{ $ubicaciones->activos->descripcion}}</td>
					<td>{{ $ubicaciones->activos->observacion}}</td>
					<td>{{ $ubicaciones->activos->numero_inventario}}</td>
					<td>{{ $ubicaciones->oficinas->nombre_oficina}}</td>
					<td>{{ $ubicaciones->oficinas->centro_costos->nombre_centro_costo}}</td>
					<td>{{ $ubicaciones->oficinas->sedes->municipio}}</td>
					<td>
						{!! Html::link(route('ubicacion.edit', $ubicaciones->id_ubicacion), 'Actualizar', array('class' => 'btn btn-success btn-sm')) !!}
					</td>
					<td>
						{!! Form::open(array('route' => array('ubicacion.destroy', $ubicaciones->id_ubicacion), 'method' => 'DELETE')) !!}
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
			</tbody>


		</table>

	@endif
@endsection
