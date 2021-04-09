

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change phone</h2>

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>

            <?php
                Session::forget('success');
            ?>
            
            <hr>
            <form class="pb-3" action="<?php echo e(route('update-phone')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <div class="form-group">

                    <?php if(Auth::user()->phone != null): ?>
                        <label for="phone" class="form-label"><strong>Your old phone <span class="color">+855 <?php echo e(Auth::user()->phone); ?></span></strong></label>
                    <?php endif; ?>

                    <?php if(Auth::user()->phone == null): ?>
                        <label for="phone" class="form-label">Add your phone</label>
                    <?php endif; ?>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0 rounded-start">+855</span>
                        </div>
                     <input type="number" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="Enter new phone" class="form-control">
                    </div>
                    <small class="text-danger"><?php echo e($errors->first('phone', ':message')); ?></small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/setting/change-phone.blade.php ENDPATH**/ ?>