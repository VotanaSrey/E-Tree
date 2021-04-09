

<?php $__env->startSection('CodeHere'); ?>
    <div class="container mb-4 mt-3">
        <div class="row">
            <div class="col-lg-6 col-sm-8 mx-auto">
                <div class="card bg-white border-0 rounded-0 shadow">
                    <h5 class="card-header color bg-white py-3">Account Setting</h5>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group">
                                <a href="/etree/account/change-name">Change your name</a>
                            </li>
                            <li class="list-group">
                                <a href="/etree/account/change-email">Change your email</a>
                            </li>
                            <li class="list-group">
                                <a href="/etree/account/change-birthday">Change your birthday</a>
                            </li>
                            <li class="list-group">
                                <a href="/etree/account/change-gender">Change your gender</a>
                            </li>
                            <li class="list-group">
                                <a href="/etree/account/change-name">Change your address</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/setting/index.blade.php ENDPATH**/ ?>