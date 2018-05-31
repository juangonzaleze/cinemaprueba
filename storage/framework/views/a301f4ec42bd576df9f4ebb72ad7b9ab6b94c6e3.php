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