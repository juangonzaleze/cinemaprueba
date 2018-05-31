<div class="form-group">
	<?php echo Form::label('nombre', 'Nombre:'); ?>

	<?php echo Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Ingrese un nombre de la pelicula']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('elenco', 'Elenco:'); ?>

	<?php echo Form::text('cast',null,['class' => 'form-control', 'placeholder' => 'Ingresa el elenco']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('direccion', 'Dirección:'); ?>

	<?php echo Form::text('direction',null,['class' => 'form-control', 'placeholder' => 'Ingrese al director']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('duracion', 'Duración:'); ?>

	<?php echo Form::text('duration',null,['class' => 'form-control', 'placeholder' => 'Ingresa la duración']); ?>

</div>
<div class="form-group">
	<?php echo Form::label('poster', 'Poster:'); ?>

	<?php echo Form::file('path'); ?>

</div>
<div class="form-group">
	<?php echo Form::label('poster', 'Genero:'); ?>

	<?php echo Form::select('genre_id', $genres); ?>

</div>