@extends('layouts.admin')
@section('content')
<div class="col-12">
	<table class="table">
		<thead>
			<tr>
				<th scope="col-xs-3" width="20%">ID</th>
				<th scope="col-xs-3" width="20%">Nombre</th>
				<th scope="col-xs-3" width="20%">Duracion</th>
				<th scope="col-xs-3" width="20%">Poster</th>
				<th scope="col-xs-3" width="20%">Elenco</th>
				<th scope="col-xs-3" width="20%">Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($movies as $m)
			<tr>
				<th scope="row">{{$m->id}}</th>
				<td>{{$m->name}}</td>
				<td>{{$m->duration}}</td>
				<!-- {{ $m->path}} -->
				<td><img src="http://localhost:8000/movies/{{$m->path}}" width="80px" height="80px" alt=""></td>
				<td>{{$m->direction}}</td>
				<td>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6">
								<a href="{{route('movie.edit',$m->id)}}" class="btn btn-warning"><i class="fa fa-cogs"></i></a>
							</div>
							<div class="col-xs-6">
									{{ Form::open(['method' => 'DELETE', 'route' => ['movie.destroy', $m->id]]) }}
									 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
									<!-- 		<a href="{{route('movie.destroy',$m->id)}}" class="btn btn-danger"><i class="fa fa-ban"></i></a> -->
									{!! Form::close() !!}
								</div>
							</div>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$movies->render()!!}
	</div>
	@endsection