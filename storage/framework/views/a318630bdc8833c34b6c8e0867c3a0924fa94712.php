<?php $__env->startSection('content'); ?>


<?php echo $__env->make('errors.request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo Form::open([ 'route' => 'usuario.store', 'method' => 'POST']); ?>

<?php echo $__env->make('usuario.form.usr', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo Form::submit('Registrar', ['class'=> 'btn btn-primary']); ?>

<?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>