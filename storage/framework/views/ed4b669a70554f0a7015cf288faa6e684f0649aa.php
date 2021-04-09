

<?php $__env->startSection('html'); ?>
<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome To Login!</h3>
                <?php if($message = Session::get('success')): ?>
                    <div class="alert alert-success">
                      <p><?php echo e($message); ?></p>
                    </div>
                <?php endif; ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                    <strong>Whoop!</strong> There were some problems with your input. <br><br>
                    <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('login')); ?>" method="POST">
                  <?php echo csrf_field(); ?>

                  <div class="form-label-group">
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Email address" required autofocus>
                    <label for="email">Email address</label>
                  </div>
  
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
  
                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                  </div>
                  <button class="btn btn-lg text-white btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                  <div class="text-center">
                    <a class="small" href="">Forgot password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/users/create">Go To Register</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/User/UserLogin.blade.php ENDPATH**/ ?>