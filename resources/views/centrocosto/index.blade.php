@extends('home')
@section('content')


	<div class="row">
		<div class="col-sm-2">
			<h4><strong><A>Centro De Costos</A></strong></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 pull-right">
			{!! Html::link(route('centrocosto.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
		</div>
	</div>

	@if (Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif


	@if(!$centrocosto->isEmpty())
		<table class="table table-striped">

			<thead>
			<tr>
				<th>Nombre</th>
				<th width="60" align="center"></th>
				<th width="60" align="center"></th>
			</tr>
			</thead>
			<tbody>
			@foreach ($centrocosto as $centro_costos)
				<tr>

					<td>{{ $centro_costos->nombre_centro_costo}}</td>

					<td>
						{!! Html::link(route('centrocosto.edit', $centro_costos->id), 'Actualizar', array('class' => 'btn btn-success btn-sm')) !!}
					</td>
					<td>
						{!! Form::open(array('route' => array('centrocosto.destroy', $centro_costos->id), 'method' => 'DELETE')) !!}
						<button type="submit" class="btn btn-danger btn-sm">Delete</button>
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
			</tbody>


		</table>

	@endif
@endsection
