

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">

    <!-- For demo purpose -->
    <div class="row mb-4">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4">500 Trees for new kids</h1>
      </div>
    </div>
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Our Donators</h2>
            <hr>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($i); ?></th>
                            <td><?php echo e($donation->name); ?></td>
                            <td class="text-danger">$<?php echo e($donation->amount); ?></td>
                            <td>
                                <?php if($donation->address == null): ?>
                                    Empty
                                <?php endif; ?>
                                <?php if($donation->address != null): ?>
                                    <?php echo e($donation->address); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php
                            $i++;
                        ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/list-donation.blade.php ENDPATH**/ ?>