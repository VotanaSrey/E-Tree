

<?php $__env->startSection('CodeHere'); ?>
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color">E-Learning</h1>
    <hr>

    <!-- Blog Post -->
    <?php $__currentLoopData = $learning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card mb-4 border-0 rounded-0 shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <a href="<?php echo e($video->link); ?>" target="_blank">
              <img class="img-fluid rounded" src="<?php echo e($video->image); ?>" alt="">
            </a>
          </div>
          <div class="col-lg-8">
            <h3 class="card-title color"><?php echo e($video->title); ?></h3>
            <p class="card-text"><?php echo e($video->description); ?></p>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <span class="color">Posted on <?php echo e($video->postdate); ?></span>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/learning.blade.php ENDPATH**/ ?>