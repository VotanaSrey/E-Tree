

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change date of birth</h2>

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>

            <?php
                Session::forget('success');
            ?>
            
            <hr>
            <form class="pb-3" action="<?php echo e(route('update-dob')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">

                    <?php if(Auth::user()->dob != null): ?>
                        <label for="dob" class="form-label"><strong>Your old birthday <span class="color"><?php echo e(Auth::user()->dob); ?></span></strong></label>
                    <?php endif; ?>

                    <?php if(Auth::user()->dob == null): ?>
                        <label for="dob" class="form-label">Add your birthday</label>
                    <?php endif; ?>

                    <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter new date of birth">
                    <small class="text-danger"><?php echo e($errors->first('dob', ':message')); ?></small>
                </div>
                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/setting/change-dob.blade.php ENDPATH**/ ?>