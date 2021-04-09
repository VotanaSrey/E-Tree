

<?php $__env->startSection('CodeHere'); ?>
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color"><?php echo e($tree[0]->name); ?></h1>
    <hr>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo e($tree[0]->image); ?>" alt="">
        <hr>

        <!-- Post Content -->
        <h3 class="text-danger">$<?php echo e($tree[0]->price); ?></h3>
        <p><?php echo e($tree[0]->longdesc); ?></p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4 brder-0 rounded-0 shadow">
          <h5 class="card-header">Comment</h5>
          <div class="card-body">
            <form method="POST" action="<?php echo e(route('comment')); ?>">
              <?php echo csrf_field(); ?>
              <div class="form-group">
                <textarea class="form-control" name="comment" rows="3"></textarea>
                <small class="text-danger"><?php echo e($errors->first('comment', ':message')); ?></small>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="treeId" value="<?php echo e($tree[0]->id); ?>" hidden>
              </div>
              <?php if(Auth::check()): ?>
                <button type="submit" class="btn btn-danger mt-2 float-end">Submit</button>
              <?php endif; ?>
              <?php if(!Auth::check()): ?>
                <a href="/etree/login" class="btn btn-danger mt-2 float-end">Submit</a>
              <?php endif; ?>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img class="d-flex mr-3 rounded-circle" style="height: 40px" src="<?php echo e($comment->image); ?>" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo e($comment->name); ?></h5>
            <?php echo e($comment->comment); ?>

          </div>
          <hr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>
  
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/detail.blade.php ENDPATH**/ ?>