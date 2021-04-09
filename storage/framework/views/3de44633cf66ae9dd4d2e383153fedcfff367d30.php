

<?php $__env->startSection('CodeHere'); ?>
    <!-- Page Content -->
  <div class="container mb-4">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4 color">Category</h1>
        <div class="list-group border-0 rounded-0 shadow">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a href="/etree/store/<?php echo e($category->id); ?>" class="list-group-item"><?php echo e($category->category); ?></a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <form action="<?php echo e(route('search')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="p-1 bg-light rounded rounded-pill shadow-sm mt-4">
            <div class="input-group">
              <input type="text" placeholder="What're you searching for?" aria-describedby="button-addon1" name="search" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" style="background: white; border-color: white;" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
        <hr>

        <div class="row">
          <?php $__currentLoopData = $trees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tree): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="card h-100  border-0 rounded-0 shadow">
              <a href="/etree/detail/<?php echo e($tree->id); ?>"><img class="card-img-top border-0 rounded-0" src="<?php echo e($tree->image); ?>" alt=""></a>
              <div class="card-body border-0 rounded-0">
                <h4 class="card-title  border-0 rounded-0">
                  <a class="text-decoration-none" href="/etree/detail/<?php echo e($tree->id); ?>"><?php echo e($tree->name); ?></a>
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
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/store.blade.php ENDPATH**/ ?>