<?php $__env->startSection('content'); ?>


<div class="section">
  <form action="<?php echo e(url('store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="judul">
            <label for="title">Judul</label>
          </div>
    </div>
     
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="isi"></textarea>
          <label for="textarea1">Isi</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
            <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
          <input type="file" id="inputgambar" name="gambar" class="validate"/ >
        </div>
       
      </div>
      <button type="submit" class="btn btn-flat blue accent-3 waves-effect waves-light white-text right">Submit<i class="material-icons right">send</i></button>
  </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>