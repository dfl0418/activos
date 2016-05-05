@extends('home')


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Home</div>

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
						@if(isset($categorias))
							{!! Form::model($categorias, ['route' => ['categoria.update', $categorias->id_categoria], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
						@else
							{!! Form::open(['route' => 'categoria.store',  'class' => 'form-horizontal', 'method' => 'post']) !!}
						@endif

						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
							<div class="col-sm-10">
								{!! Form::text('nombre_categoria', @$categorias->nombre_categoria, ["class" => "form-control"]) !!}
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

	</div>
@endsection
