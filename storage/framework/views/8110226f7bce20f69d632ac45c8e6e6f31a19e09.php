

<?php $__env->startSection('CodeHere'); ?>
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color">Events</h1>
    <!-- Image Header -->
    <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/images/KidWithTree.jpg')">
          <div class="carousel-caption">
            <a href="/" class="text-white" style="text-decoration: none;">
              <h3>500 Trees for new kid</h3>
              <p>You can donate money for growing the trees</p>
            </a>
            <a class="btn text-white btn-danger">Donate</a>
            <a href="" class="btn text-white btn-danger">List all donate</a>
          </div>
        </div>
      </div>
    </div>
    <hr>

    <!-- Marketing Icons Section -->
    <div class="row mb-5">
      <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-3">
        <div class="card rounded-0 border-0 shadow h-100">
          <h4 class="card-header border-0 color"><?php echo e($event->title); ?></h4>
          <div class="card-body border-0">
            <p class="card-text"><?php echo e($event->description); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Tree/resources/views/application/events.blade.php ENDPATH**/ ?>