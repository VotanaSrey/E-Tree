

<?php $__env->startSection('CodeHere'); ?>
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h3 class="mt-4 mb-3 color">About us</h3>
    <hr>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4 shadow" src="/images/About.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <h3 class="color">About our company</h3>
        <p>Currently, We are looking for our evvironment which similar to down a little by little</p>
        <p>In our startup concept is going through to run up a business in combodia, Particularly in our platform will be donated for combodia ciziten and public environment</p>
        <p>Last of all we wish you guys were agreed us to build it up Cherss!!! E-Tree</p>
        <p>Currently, We are looking for our evvironment which similar to down a little by little</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h3 class="color">Our Team</h3>
    <hr>

    <div class="row">
      <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4 col-md-4 mb-4">
        <div class="card rounded-0 border-0 h-100 text-center shadow">
          <img class="card-img-top rounded-0" src="<?php echo e($member->image); ?>" alt="">
          <div class="card-body border-0">
            <h4 class="card-title"><?php echo e($member->lastname); ?> <?php echo e($member->firstname); ?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo e($member->position); ?></h6>
            <p class="card-text"><?php echo e($member->shotdesc); ?></p>
          </div>
          <div class="card-footer border-0">
            <a class="text-decoration-none" href="mailto:<?php echo e($member->email); ?>"><?php echo e($member->email); ?> ▷</a>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- /.row -->

    <!-- Our Customers -->
    <h3 class="color">Our Partner</h3>
    <hr>
    <div class="row">
      <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid shadow" src="<?php echo e($partner->image); ?>" alt="">
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Tree/resources/views/application/about.blade.php ENDPATH**/ ?>