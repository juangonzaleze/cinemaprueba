@extends('layouts.admin')
@section('content')

<div class="form-group">
	{!!Form::open()!!}
	<div class="alert alert-success alert-dismissible" role="alert" id="msj-success" style="display:none">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		Genero creado correctamente
	</div>
	<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong class="msj"></strong>
</div>
	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
	@include('genero.form.genero')
	{!!link_to('#', $title ='Registro', $attributes = ['id'=>'registro', 'class' => 'btn btn-primary'], $secure = null)!!}
	{!!Form::close()!!}
</div>

@endsection

@section('scripts')
	{!!Html::script('js/script.js')!!}
@endsection