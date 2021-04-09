

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
            <form class="pb-3" action="<?php echo e(route('update-name')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="firstname" class="form-label"><strong>Your old first name <span class="color"><?php echo e(Auth::user()->firstname); ?></span></strong></label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter new first name">
                    <small class="text-danger"><?php echo e($errors->first('firstname', ':message')); ?></small>
                </div>
                
                <div class="form-group">
                    <label for="lastname" class="form-label"><strong>Your old last name <span class="color"><?php echo e(Auth::user()->lastname); ?></span></strong></label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter new last name">
                    <small class="text-danger"><?php echo e($errors->first('lastname', ':message')); ?></small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/setting/change-name.blade.php ENDPATH**/ ?>