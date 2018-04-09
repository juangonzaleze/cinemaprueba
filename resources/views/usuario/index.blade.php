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
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">Nomre</th>
			<th scope="col">Correo</th>
			<th scope="col">Opciones</th>
		</tr>
	</thead>
	@foreach( $users as $u)
	<tbody>
		<tr>
			<th scope="row">{{$u->id}}</th>
			<td>{{$u->name}}</td>
			<td>{{$u->email}}</td>
			<td>
				<div class="form-group">
					{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $u->id, $attributes = ['class' => 'btn btn-primary'])!!}
				</div>
			</td>
		</tr>
	</tbody>
	@endforeach
</table>

@endsection