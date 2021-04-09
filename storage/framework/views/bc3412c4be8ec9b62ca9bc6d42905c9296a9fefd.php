

<?php $__env->startSection('CodeHere'); ?>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/images/KidWithTree.jpg')">
          <div class="carousel-caption">
            <a href="/" class="text-white" style="text-decoration: none;">
              <h3>500 Trees for kids</h3>
              <p>You can donate money for growing the trees</p>
            </a>

            <a href="/etree/donate" class="btn text-white btn-danger">Donate</a>

            <a href="/etree/list-donation" class="btn text-white btn-danger">List all donation</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <h3 class="my-4 color">Events comming soon!!!</h3>
    <!-- Marketing Icons Section -->
    <div class="card-group">
      <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        if ($i == 1) {
          $bg_color = 'bg-primary';
        } else if ($i == 2) {
          $bg_color = 'bg-danger';
        } else if ($i == 3) {
          $bg_color = 'bg-warning';
        } else {
          $bg_color = 'bg-success';
          $i = 0;
        }
        $i++;
      ?>
      <div class="col-lg-3">
        <div class="card text-white rounded-0 <?php echo e($bg_color); ?> h-100">
          <h4 class="card-header border-0"><?php echo e($event->title); ?></h4>
          <div class="card-body border-0">
            <p class="card-text"><?php echo e($event->description); ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h3 class="color mt-4">Our Top Trees</h3>
    <hr>

    <div class="row">
      <?php $__currentLoopData = $trees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 rounded-0 h-100 shadow">
            <a href="/etree/detail/<?php echo e($tree->id); ?>"><img class="card-img-top rounded-0" src="<?php echo e($tree->image); ?>" alt=""></a>
            <div class="card-body border-0">
              <h4 class="card-title">
                <a href="/etree/detail/<?php echo e($tree->id); ?>" class="text-decoration-none"><?php echo e($tree->name); ?></a>
              </h4>
              <h5 class="text-danger">$<?php echo e($tree->price); ?></h5>
              <p class="card-text"><?php echo e($tree->shotdesc); ?></p>
            </div>
            <a href="/etree/store/order/<?php echo e($tree->id); ?>" class="card-footer border-0 rounded-0 text-white btn btn-danger">
              Order now
            </a>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <hr>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2 class="color">Our Features</h2>
        <p>There are our features:</p>
        <ul>
          <li>We have Trees store</li>
          <li>We have events for customer</li>
          <li>We have donate for cambodia</li>
          <li>We have E-Learning</li>
        </ul>
        <p>Currently, We are looking for our evvironment which similar to down a little by little
         
          In our startup concept is going through to run up a business in combodia.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="/images/Taphrom.jpg" alt="">
      </div>
    </div>
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
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/index.blade.php ENDPATH**/ ?>