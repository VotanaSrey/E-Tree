

<?php $__env->startSection('html'); ?>
<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome To Register!</h3>
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
                <form action="<?php echo e(route('users.store')); ?>" method="POST">
                  <?php echo csrf_field(); ?>

                  
                  <div class="form-label-group">
                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="form-control" placeholder="Email address" required autofocus>
                    <label for="email">Email address</label>
                  </div>

                  
                  <div class="form-label-group">
                    <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" class="form-control" placeholder="Name" required>
                    <label for="name">Name</label>
                  </div>

                  
                  <div class="form-label-group">
                    <select name="gender" id="gender" data-selected="Other" class="form-control" required>
                        <?php if(old('gender') != 'Male' && old('gender') != 'Female' && old('gender') != 'Other'): ?>
                           <option value="" hidden selected>Gender</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Other">Other</option>
                        <?php endif; ?>
                        <?php if(old('gender') == 'Male'): ?>
                           <option value="Male" selected>Male</option>
                           <option value="Female">Female</option>
                           <option value="Other">Other</option>
                        <?php endif; ?>
                        <?php if(old('gender') == 'Female'): ?>
                           <option value="Male">Male</option>
                           <option value="Female" selected>Female</option>
                           <option value="Other">Other</option>
                        <?php endif; ?>
                        <?php if(old('gender') == 'Other'): ?>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                           <option value="Other" selected>Other</option>
                        <?php endif; ?>
                    </select>
                  </div>

                  
                  <div class="form-label-group">
                    <input type="date" name="dob" id="dob" value="<?php echo e(old('dob')); ?>" class="form-control" required>
                    <label for="dob">Birthday</label>
                  </div>

                  
                  <div class="form-label-group">
                    <input type="text" name="address" id="address" value="<?php echo e(old('address')); ?>" class="form-control" placeholder="Address" required>
                    <label for="address">Address</label>
                  </div>

                  
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>" class="form-control" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>

                  
                  <div class="form-label-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" class="form-control" placeholder="Confirm Password" required>
                    <label for="password_confirmation">Confirm Password</label>
                  </div>

                  
                  <button class="btn btn-lg text-white btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>

                  
                  <div class="text-center">
                    <a class="small" href="/users">Go To Login</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.html', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/User/UserRegister.blade.php ENDPATH**/ ?>