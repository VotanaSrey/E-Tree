

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">

    <!-- For demo purpose -->
    <div class="row mb-4">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4">500 Trees for kids</h1>
      </div>
    </div>
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">
  
          <!-- Credit card form content -->
          <div class="tab-content">
  
            <!-- credit card info-->
            <div id="nav-tab-card" class="tab-pane fade show active">
              <h2 class="color">Credit Card</h2>
              <hr>

              <?php if(Session::has('donate')): ?>
              <div class="alert alert-success"><?php echo e(Session::get('donate')); ?></div>
              <?php
                  Session::forget('donate');
              ?>
              <?php endif; ?>

              <form method="POST" action="<?php echo e(route('donate')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                   <label for="amount">Amount</label>
                   <div class="input-group">
                       <div class="input-group-prepend">
                           <span class="input-group-text rounded-0 rounded-start">$</span>
                       </div>
                    <input type="number" name="amount" value="<?php echo e(old('amount')); ?>" placeholder="Amount" class="form-control">
                   </div>
                   <?php echo $errors->first('amount', '<small class="text-danger">:message</small>'); ?>

                </div>

                <div class="form-group">
                  <label for="username">Full name (on the card)</label>
                  <input type="text" name="username" value="<?php echo e(old('username')); ?>" placeholder="Full name" class="form-control">
                  <?php echo $errors->first('username', '<small class="text-danger">:message</small>'); ?>

                </div>

                <div class="form-group">
                  <label for="cardNumber">Card number</label>
                  <div class="input-group">
                    <input type="text" name="cardNumber" value="<?php echo e(old('cardNumber')); ?>" placeholder="Your card number" class="form-control">
                    <div class="input-group-append">
                      <span class="input-group-text bg-white border-0 color">
                        <i class="fa fa-cc-visa mx-1"></i>
                        <i class="fa fa-cc-amex mx-1"></i>
                        <i class="fa fa-cc-mastercard mx-1"></i>
                      </span>
                    </div>
                  </div>
                  <?php echo $errors->first('cardNumber', '<small class="text-danger">:message</small>'); ?>

                </div>

                <div class="row">
                  <div class="col-sm-8">
                    <div class="form-group">
                      <label><span class="hidden-xs">Expiration</span></label>
                      <div class="input-group">
                        <input type="number" value="<?php echo e(old('month')); ?>" placeholder="MM" name="month" value="<?php echo e(old('month')); ?>" class="form-control">
                        <input type="number" placeholder="YYYY" name="year" value="<?php echo e(old('year')); ?>" class="form-control">
                      </div>
                      <?php echo $errors->first('month', '<small class="text-danger">:message</small>'); ?>

                      <?php echo $errors->first('year', '<small class="text-danger">:message</small>'); ?>

                    </div>
                  </div>

                  <div class="col-sm-4">
                    <div class="form-group mb-4">
                      <label data-toggle="tooltip" for="cvv" title="Three-digits code on the back of your card">CVV
                        <i class="fa fa-question-circle"></i>
                      </label>
                      <input type="number" name="cvv" value="<?php echo e(old('cvv')); ?>" placeholder="123" class="form-control">
                      <?php echo $errors->first('cvv', '<small class="text-danger">:message</small>'); ?>

                    </div>
                  </div>
  
                </div>
                <button type="submit" class="subscribe btn btn-danger btn-block rounded-pill shadow-sm form-control">Donate</button>
              </form>
            </div>
            <!-- End -->
          </div>
          <!-- End -->
  
        </div>
      </div>
    </div>
  </div>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/donations.blade.php ENDPATH**/ ?>