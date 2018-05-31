<?php $__env->startSection('content'); ?>

<div class="form-group">
	<?php echo Form::open(); ?>

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
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
	<?php echo $__env->make('genero.form.genero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo link_to('#', $title ='Registro', $attributes = ['id'=>'registro', 'class' => 'btn btn-primary'], $secure = null); ?>

	<?php echo Form::close(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<?php echo Html::script('js/script.js'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>