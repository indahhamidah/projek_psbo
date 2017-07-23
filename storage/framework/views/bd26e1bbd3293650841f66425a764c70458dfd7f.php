<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
    <br></br>
    <br></br>
    <br></br>
        <div class="col-md-10 col-md-offset-1">
            <center>
            <img src="<?php echo e(asset('img1/rb.png')); ?>" />
            </center>
            

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
      <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    </div>
</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>