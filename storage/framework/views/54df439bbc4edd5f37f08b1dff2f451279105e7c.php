<?php $__env->startSection('content'); ?>



<div class="section">
<form action="<?php echo e(url('query')); ?>" method="GET">
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="q">
            <label for="title">Search</label>
          </div>
           <button type="submit" class="btn btn-flat blue accent-3 waves-effect waves-light white-text right">Search<i class="material-icons right">search</i></button>
    </div>
 </form>
    <?php foreach($datas as $data): ?>

    <div class="row">
        <div class="col s12">
   <h5><?php echo e($data->judul); ?></h5>
   <div class="divider"></div>
             
            <p><?php echo substr($data->isi,0,200); ?>...</p>
             <img src="<?php echo e(asset('img1/PDF-icon.png')); ?>" style="max-height:100px;max-width:100px;margin-top:10px;">
             <p> </p>

            <a href="<?php echo e(asset('/image/'.$data->gambar)); ?>">Open the pdf!</a>
              <p> </p>
           
            <a href="<?php echo e(url('read', $data->id)); ?>" class="btn btn-flat blue accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
            <a href="<?php echo e(url('edit', $data->id)); ?>" class="btn btn-flat blue darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a href="<?php echo e(url('delete', $data->id)); ?>" onclick="return confirm('Yakin mau hapus data ini sob?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
        </div>
    </div>
    <?php endforeach; ?>

</div>

<?php echo e($datas->render()); ?>


<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="<?php echo e(url('add')); ?>" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
 </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>