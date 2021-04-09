

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change address</h2>

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>

            <?php
                Session::forget('success');
            ?>
            
            <hr>
            <form class="pb-3" action="<?php echo e(route('update-address')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" value="<?php echo e(old('address')); ?>" placeholder="Enter new address" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('address', ':message')); ?></small>
                </div>

                
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" value="<?php echo e(old('city')); ?>" placeholder="Enter new city" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('city', ':message')); ?></small>
                </div>

                
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" value="<?php echo e(old('country')); ?>" placeholder="Enter new country" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('country', ':message')); ?></small>
                </div>

                
                <div class="form-group">
                    <label for="zip_code" class="form-label">Zip code</label>
                    <input type="text" name="zip_code" value="<?php echo e(old('zip_code')); ?>" placeholder="Enter new street" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('zip_code', ':message')); ?></small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/setting/change-address.blade.php ENDPATH**/ ?>