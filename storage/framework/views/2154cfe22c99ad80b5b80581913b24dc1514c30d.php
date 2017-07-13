<?php $__env->startSection('content'); ?>



<div class="container">
    <div class="box">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="section">
                <p class="text-center">RuangBagi</p>         
        </div>
                        <div class="section">
                    <form action="<?php echo e(url('query')); ?>" method="GET">
                    <div class="box">
                     <div class="input-field col s12">
                     <input type="text" class="form-control" name="q">
          </div>
           <button type="submit">
           <i class="text-center">Cari</i></button>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>