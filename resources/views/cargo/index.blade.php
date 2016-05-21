@extends('home')
@section('content')


	<div class="row">
		<div class="col-sm-2">
			<h4><strong><A>Cargos</A></strong></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 pull-right">
			{!! Html::link(route('cargo.create'), 'Add', array('class' => 'btn btn-info btn-md pull-right')) !!}
		</div>
	</div>

	@if (Session::has('message'))
		<div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif


	@if(!$cargos->isEmpty())
		<table class="table table-striped">

			<thead>
			<tr>
				<th>Nombre</th>
				<th width="60" align="center"></th>
				<th width="60" align="center"></th>
			</tr>
			</thead>
			<tbody>
			@foreach ($cargos as $cargos)
				<tr>

					<td>{{ $cargos->nombre_cargo}}</td>


				</tr>
			@endforeach
			</tbody>


		</table>

	@endif
@endsection
