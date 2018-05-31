<?php $__env->startSection('content'); ?>
<?php echo $__env->make('genero.modal.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none;">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
	<strong>Genero actualizado correctamente</strong>
</div>
<table class="table">
	<thead>
		<th>Nombre</th>
		<th>Operaciones</th>
	</thead>
	<tbody id="datos"></tbody>
</table>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('js/script2.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>