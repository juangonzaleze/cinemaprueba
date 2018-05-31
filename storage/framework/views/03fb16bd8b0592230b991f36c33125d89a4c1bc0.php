<?php $__env->startSection('content'); ?>

<?php echo Form::model($movie, ['route' => ['movie.update', $movie->id], 'method' => 'PUT', 'files' => true]); ?>

<?php echo $__env->make('pelicula.form.pelicula', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo Form::submit('Actualizar', ['class'=> 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>