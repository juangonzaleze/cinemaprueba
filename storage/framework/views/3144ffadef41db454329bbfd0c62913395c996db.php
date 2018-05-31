<?php $message = Session::get('message')?>

<?php if(Session::has('message')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
	<?php echo e(Session::get('message')); ?>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('errors.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="users">
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Nomre</th>
				<th scope="col">Correo</th>
				<th scope="col">Opciones</th>
			</tr>
		</thead>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tbody>
			<tr>
				<td><?php echo e($u->name); ?></td>
				<td><?php echo e($u->email); ?></td>
				<td>
					<div class="form-group">
						<a class="btn btn-primary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="<?php echo e(route('usuario.edit',$u->id)); ?>"><i class="fa fa-cogs"></i>
						</a>
						<!-- <a class="btn btn-primary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="<?php echo e(route('usuario.destroy',$u->id)); ?>">Eliminar
						</a> -->
					</div>
				</td>
			</tr>
		</tbody>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
		<?php echo $users->render(); ?>

</div>
<?php $__env->startSection('scripts'); ?>
<?php echo Html::script('js/script3.js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>