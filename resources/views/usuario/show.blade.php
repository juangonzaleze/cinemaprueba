@extends('layouts.admin')


<?php $message = Session::get('message')?>

@if (Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
	{{Session::get('message')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

@section('content')
@include ('errors.error')
<table class="table">
	<thead>
		<tr>
			<th scope="col">Nomre</th>
			<th scope="col">Correo</th>
			<th scope="col">Opciones</th>
		</tr>
	</thead>
	@foreach( $users as $u)
	<tbody>
		<tr>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td>
				<div class="form-group">
					<a class="btn btn-primary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('usuario.edit',$u->id)}}"><i class="fa fa-cogs"></i>
					</a>
<!-- 					<a class="btn btn-primary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('usuario.destroy',$u->id)}}">Eliminar
					</a> -->
				</div>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>

	{!!$users->render()!!}
@endsection