<!-- Modal -->
<!-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
        <input type="hidden" id="id">
        <?php echo $__env->make('genero.form.genero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <div class="modal-footer">
        <?php echo link_to('#', $title="Actualizar", $attributes = ['id' => 'actualizar', 'class' => 'btn btn-primary'], $secure =null); ?>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Actualizar</button> -->
<!--       </div>
    </div>
  </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
       <input type="hidden" id="id">
       <?php echo $__env->make('genero.form.genero', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     </div>
     <div class="modal-footer">
      <?php echo link_to('#', $title="Actualizar", $attributes = ['id' => 'actualizar', 'class' => 'btn btn-primary'], $secure =null); ?>

    </div>
  </div>
</div>
</div>