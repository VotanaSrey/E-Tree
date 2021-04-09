

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome To Login!</h3>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                        <?php
                            Session::forget('success');
                        ?>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                      <?php echo e(Session()->get('error')); ?>

                    </div>
                    <?php
                        Session::forget('error');
                    ?>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('check')); ?>">
                  <?php echo csrf_field(); ?>
                  <div class="form-label-group">
                    <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>" placeholder="Email address">
                    <label for="email">Email address</label>
                    <?php echo $errors->first('email', '<small class="text-danger">:message</small>'); ?>

                  </div>
  
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control" placeholder="Password">
                    <label for="password">Password</label>
                    <?php echo $errors->first('password', '<small class="text-danger">:message</small>'); ?>

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
                    <a class="small" href="/etree/register">Go To Register</a>
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
<?php echo $__env->make('Container.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/users/login.blade.php ENDPATH**/ ?>