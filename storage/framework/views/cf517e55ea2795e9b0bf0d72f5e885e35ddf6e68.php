

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change name</h2>

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>

            <?php
                Session::forget('success');
            ?>
            
            <hr>
            <form class="pb-3" action="<?php echo e(route('update-email')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="email" class="form-label"><strong>Your old Email <span class="color"><?php echo e(Auth::user()->email); ?></span></strong></label>
                    <input type="text" value="<?php echo e(old('email')); ?>" name="email" id="email" class="form-control" placeholder="Enter new Email">
                    <small class="text-danger"><?php echo e($errors->first('email', ':message')); ?></small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/setting/change-email.blade.php ENDPATH**/ ?>