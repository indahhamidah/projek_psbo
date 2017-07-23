

  <nav class="cyan accent-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo e(url('/')); ?>" class="brand-logo"><h5>RuangBagi</h5></a>
     
       <ul class="right hide-on-med-and-down">
         <?php if(Auth::guest()): ?>
        <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
  
        <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
         <?php else: ?>
                      <li><a class="navbar-brand" href="<?php echo e(url('/add')); ?>">Upload File</a></li>
                        <li><a class="navbar-brand" href="<?php echo e(url('/show')); ?>">MyRoom</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php endif; ?>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
      </ul>
      
    </div>
  </nav>
