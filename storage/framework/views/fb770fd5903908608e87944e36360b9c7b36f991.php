

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome To Register!</h3>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                        <?php
                            Session::forget('success');
                        ?>
                    </div>
                <?php endif; ?>
                <form method="POST" action="<?php echo e(route('store')); ?>">
                  <?php echo csrf_field(); ?>

                  
                  <div class="form-label-group">
                    <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email address">
                    <label for="email">Email address</label>
                    <?php echo $errors->first('email', '<small class="text-danger">:message</small>'); ?>

                  </div>

                  
                  <div class="form-label-group">
                    <input type="text" name="firstname" id="firstname" value="<?php echo e(old('firstname')); ?>" class="form-control" placeholder="First name">
                    <label for="firstname">First name</label>
                    <?php echo $errors->first('firstname', '<small class="text-danger">:message</small>'); ?>

                  </div>

                  
                  <div class="form-label-group">
                    <input type="text" name="lastname" id="lastname" value="<?php echo e(old('lastname')); ?>" class="form-control" placeholder="Last name">
                    <label for="lastname">Last name</label>
                    <?php echo $errors->first('lastname', '<small class="text-danger">:message</small>'); ?>

                  </div>

                  
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <label for="password">Password</label>
                    <?php echo $errors->first('password', '<small class="text-danger">:message</small>'); ?>

                  </div>

                  
                  <div class="form-label-group">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                    <label for="confirm_password">Confirm Password</label>
                    <?php echo $errors->first('confirm_password', '<small class="text-danger">:message</small>'); ?>

                  </div>

                  
                  <button class="btn btn-lg text-white btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>

                  
                  <div class="text-center">
                    <a class="small" href="/etree/login">Go To Login</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/users/registetion.blade.php ENDPATH**/ ?>