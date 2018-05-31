@extends('layouts.admin')
@section('content')
{!! Form::open(['route' => 'movie.store', 'method' => 'POST', 'files' => true]) !!}
	@include('pelicula.form.pelicula')
	{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection