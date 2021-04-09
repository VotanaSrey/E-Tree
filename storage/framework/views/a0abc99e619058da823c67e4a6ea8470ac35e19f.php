

<?php $__env->startSection('CodeHere'); ?>
<div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto mt-4 mb-3 mt-lg-5 mb-lg-5">
        <div class="bg-white shadow p-4 p-lg-5">

            <h2 class="color">Your orders</h2>
            
            <?php if(Session::has('success')): ?>
                <div class="alert alert-danger"><?php echo e(Session::get('success')); ?></div>
                <?php
                    Session::forget('success');
                ?>
            <?php endif; ?>

            <hr>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tree</th>
                        <th scope="col">Date</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($order->quantity); ?> <a class="color" href="/etree/detail/<?php echo e($order->tree_id); ?>"><?php echo e($order->tree_name); ?></a></td>
                            <td><?php echo e($order->created_at->toDateString()); ?></td>
                            <td><a class="color" href="/etree/ordered-history/detail/<?php echo e($order->id); ?>">More</a></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Tree/resources/views/application/ordered-history.blade.php ENDPATH**/ ?>