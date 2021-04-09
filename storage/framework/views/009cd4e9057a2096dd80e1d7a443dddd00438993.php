

<?php $__env->startSection('CodeHere'); ?>
<div class="container mt-3 mb-4">
    <h2 class="color">My Account</h2>
    <hr>
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100 bg-white shadow border-0 rounded-0">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img class="img-thumbnail border-2 my-border" src="<?php echo e(Auth::user()->image); ?>">
                            </div>
                            <a href="/etree/account/change-profile" class="text-decoration-none color mb-3">
                                Change Profile
                            </a>
                            <h5 class="user-name"><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></h5>
                            <h6 class="user-email"><?php echo e(Auth::user()->email); ?></h6>
                            <hr>
                            <ul class="list-group text-lg-start">
                                <li class="list-group">
                                    <a class="text-decoration-none color" href="/etree/account/change-name">Change your name</a>
                                </li>
                                <li class="list-group">
                                    <a class="text-decoration-none color" href="/etree/account/change-email">Change your email</a>
                                </li>
                                <li class="list-group">
                                    <a class="text-decoration-none color" href="/etree/account/change-birthday">Change your birthday</a>
                                </li>
                                <li class="list-group">
                                    <a class="text-decoration-none color" href="/etree/account/change-gender">Change your gender</a>
                                </li>
                                <li class="list-group">
                                    <a class="text-decoration-none color" href="/etree/account/change-phone">Change your phone</a>
                                </li>
                                <li class="list-group">
                                    <a class="text-decoration-none color" href="/etree/account/change-address">Change your address</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100 border-0 rounded-0 shadow">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mb-3 color">Personal Details</h4>
                            <hr>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Full Name</label>
                                <h5><?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?></h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <h5><?php echo e(Auth::user()->email); ?></h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <h5>
                                    <?php if(Auth::user()->phone == null): ?>
                                        xxx xxx xxx
                                    <?php endif; ?>
                                    <?php if(Auth::user()->phone != null): ?>
                                        +855 <?php echo e(Auth::user()->phone); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Birthday</label>
                                <h5>
                                    <?php if(Auth::user()->dob == null): ?>
                                        yyyy/mm/dd
                                    <?php endif; ?>
                                    <?php if(Auth::user()->dob != null): ?>
                                        <?php echo e(Auth::user()->dob); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Gender</label>
                                <h5>
                                    <?php if(Auth::user()->gender == null): ?>
                                        hidden
                                    <?php endif; ?>
                                    <?php if(Auth::user()->gender != null): ?>
                                        <?php echo e(Auth::user()->gender); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mb-3 color">Address</h4>
                            <hr>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">address</label>
                                <h5>
                                    <?php if(Auth::user()->address == null): ?>
                                        Empty
                                    <?php endif; ?>
                                    <?php if(Auth::user()->address != null): ?>
                                        <?php echo e(Auth::user()->address); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">City</label>
                                <h5>
                                    <?php if(Auth::user()->city == null): ?>
                                        Empty
                                    <?php endif; ?>
                                    <?php if(Auth::user()->city != null): ?>
                                        <?php echo e(Auth::user()->city); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <h5>
                                    <?php if(Auth::user()->country == null): ?>
                                        Empty
                                    <?php endif; ?>
                                    <?php if(Auth::user()->country != null): ?>
                                        <?php echo e(Auth::user()->country); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Zip Code</label>
                                <h5>
                                    <?php if(Auth::user()->zip_code == null): ?>
                                        Empty
                                    <?php endif; ?>
                                    <?php if(Auth::user()->zip_code != null): ?>
                                        <?php echo e(Auth::user()->zip_code); ?>

                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Tree/resources/views/application/account.blade.php ENDPATH**/ ?>