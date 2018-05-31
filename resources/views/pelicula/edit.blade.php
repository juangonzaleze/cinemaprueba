@extends('layouts.admin')
@section('content')

{!! Form::model($movie, ['route' => ['movie.update', $movie->id], 'method' => 'PUT', 'files' => true]) !!}
@include('pelicula.form.pelicula')
{!!Form::submit('Actualizar', ['class'=> 'btn btn-primary'])!!}
{!! Form::close() !!}

@endsection