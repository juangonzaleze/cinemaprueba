<?php $__env->startSection('content'); ?>
<?php echo Form::open(['route' => 'movie.store', 'method' => 'POST', 'files' => true]); ?>

	<?php echo $__env->make('pelicula.form.pelicula', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::submit('Registrar', ['class' => 'btn btn-primary']); ?>

<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>