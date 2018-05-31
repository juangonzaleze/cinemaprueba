<?php $__env->startSection('content'); ?>
<div class="col-12">
	<table class="table">
		<thead>
			<tr>
				<th scope="col-xs-3" width="20%">ID</th>
				<th scope="col-xs-3" width="20%">Nombre</th>
				<th scope="col-xs-3" width="20%">Duracion</th>
				<th scope="col-xs-3" width="20%">Poster</th>
				<th scope="col-xs-3" width="20%">Elenco</th>
				<th scope="col-xs-3" width="20%">Opciones</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<th scope="row"><?php echo e($m->id); ?></th>
				<td><?php echo e($m->name); ?></td>
				<td><?php echo e($m->duration); ?></td>
				<!-- <?php echo e($m->path); ?> -->
				<td><img src="http://localhost:8000/movies/<?php echo e($m->path); ?>" width="80px" height="80px" alt=""></td>
				<td><?php echo e($m->direction); ?></td>
				<td>
					<div class="form-group">
						<div class="row">
							<div class="col-xs-6">
								<a href="<?php echo e(route('movie.edit',$m->id)); ?>" class="btn btn-warning"><i class="fa fa-cogs"></i></a>
							</div>
							<div class="col-xs-6">
									<?php echo e(Form::open(['method' => 'DELETE', 'route' => ['movie.destroy', $m->id]])); ?>

									 <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

									<!-- 		<a href="<?php echo e(route('movie.destroy',$m->id)); ?>" class="btn btn-danger"><i class="fa fa-ban"></i></a> -->
									<?php echo Form::close(); ?>

								</div>
							</div>
						</div>
					</td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
		<?php echo $movies->render(); ?>

	</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>