<?php $__env->startSection('content'); ?>

<div class="col s12">
            <div class="panel panel-default">
                        <div class="section">
                        <form action="<?php echo e(url('query')); ?>" method="GET">
                            <div class="row">
                                  <div class="input-field col-md-12">
                                    <input type="text" class="validate col-md-12" placeholder="Search" name="q">
                                  </div>
                                   
                            </div>
                         </form>
                     </div>

            </div>
    </div>
<div class="section">
<?php if(count($hasil)): ?>
<div class="card-panel green white-text">Hasil pencarian : <b><?php echo e($query); ?></b></div>

  <?php foreach($hasil as $data): ?>
  <?php if(Auth::guest()): ?>
    <div class="row">
    <div class="col s12">
      <h5><?php echo e($data->judul); ?></h5>

            <div class="divider"></div>
            <p><?php echo substr($data->isi,0,200); ?>...</p>
             <img src="<?php echo e(asset('img1/PDF-icon.png')); ?>" style="max-height:100px;max-width:100px;margin-top:10px;">
            
             <p> </p>
            <a href="<?php echo e(asset('/image/'.$data->gambar)); ?>">Open the pdf!</a>
              <p> </p>
                
            <a href="<?php echo e(url('read', $data->id)); ?>" class="btn btn-flat pink accent-3 waves-effect waves-light white-text">Readmore <i class="material-icons right">send</i></a>
    </div>
  </div>
  <?php else: ?>

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
  </div>
  <?php endif; ?>
  <?php endforeach; ?>

</div>

<?php echo e($hasil->render()); ?>

  
<?php else: ?>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                 <div class="card-panel red darken-3 white-text">Oops.. Data <b><?php echo e($query); ?></b> Tidak Ditemukan</div>
            </div>
        </div>
    </div>

  
<?php endif; ?>
  



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>