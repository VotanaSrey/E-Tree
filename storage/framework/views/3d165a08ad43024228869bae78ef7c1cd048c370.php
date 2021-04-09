

<?php $__env->startSection('CodeHere'); ?>
<div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto mt-4 mb-3 mt-lg-5 mb-lg-5">
        <div class="bg-white shadow p-4 p-lg-5">

            <h2 class="color">Your orders</h2>
            <hr>

            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Tree</th>
                        <td><a class="color" href="/etree/detail/<?php echo e($tree[0]->id); ?>"><?php echo e($tree[0]->name); ?></a></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td class="text-danger">$<?php echo e($tree[0]->price); ?></td>
                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td><?php echo e($order[0]->quantity); ?></td>
                    </tr>
                    <tr>
                        <th>Total price</th>
                        <td class="text-danger">$<?php echo e($order[0]->total); ?></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><?php echo e($order[0]->created_at->toDateString()); ?></td>
                    </tr>
                    <tr>
                        <th>Progress</th>
                        <td class="text-warning"><?php echo e($order[0]->progress); ?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>+855 <?php echo e($order[0]->phone); ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo e($order[0]->address); ?></td>
                    </tr>
                    <tr>
                        <th>city</th>
                        <td><?php echo e($order[0]->city); ?></td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td><?php echo e($order[0]->country); ?></td>
                    </tr>
                </tbody>
            </table>
            <a class="btn btn-danger" href="/ordered-cancel/<?php echo e($order[0]->id); ?>">cancel</a>
        </div>
      </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/ordered-detail.blade.php ENDPATH**/ ?>