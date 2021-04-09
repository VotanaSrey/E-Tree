

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change Profile</h2>

            <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(Session::get('success')); ?></div>
            <?php endif; ?>

            <?php
                Session::forget('success');
            ?>
            
            <hr>
            <form class="pb-3" action="<?php echo e(route('update-profile')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="image" class="form-label">Profile</label>
                    <input class="form-control" type="file" value="<?php echo e(old('image')); ?>" id="image" name="image" accept="image/*" onchange="preview(event)">
                    <small class="text-danger"><?php echo e($errors->first('image', ':message')); ?></small>
                    <img class="shadow mx-auto d-block mt-4" id="output_image" style="max-width: 200px">
                </div>
                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<script>
    function preview (event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Tree/resources/views/setting/change-profile.blade.php ENDPATH**/ ?>