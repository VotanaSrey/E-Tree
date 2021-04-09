

<?php $__env->startSection('CodeHere'); ?>
<div class="container py-5">
    <form action="<?php echo e(route('store-order')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-lg-7 mx-auto">
              <div class="bg-white shadow p-5">
                  <h3 class="color"><?php echo e($tree[0]->name); ?></h3>
                  <hr>
                  <img src="<?php echo e($tree[0]->image); ?>" alt="">
                  <h4 class="mt-2">Price: <span class="text-danger">$<?php echo e($tree[0]->price); ?></span></h4>
                  <p><?php echo e($tree[0]->shotdesc); ?></p>
                  <hr>

                  <input type="number" name="price" id="price" value="<?php echo e($tree[0]->price); ?>" hidden>
                  <div class="form-group">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="number" name="quantity" id="quantity" value="<?php echo e(old('uantity')); ?>" class="form-control" placeholder="How many trees do you need ?" oninput="myFunction()">
                      <small class="text-danger"><?php echo e($errors->first('quantity', ':message')); ?></small>
                      <small class="text-danger" id="wr_quantity"></small><br>
                      <h5>Total price: <span class="text-danger" id="total"></h5></small>
                  </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto mt-2">
              <div class="bg-white shadow p-5">
                <h3 class="color">Phone and Address</h3>
                <hr>
                <?php if(Auth::user()->address != null && Auth::user()->city != null && Auth::user()->country != null): ?>
                  <h6>Do you want to use information in your account ?</h6>
                  <a class="btn btn-danger" onclick="order()">Okay</a>
                  <hr>
                <?php endif; ?>

                
                <div class="form-group">
                <label for="phone" class="form-label">Add your phone</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text rounded-0 rounded-start">+855</span>
                  </div>
                <input type="number" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" placeholder="Enter new phone" class="form-control">
                </div>
                <small class="text-danger"><?php echo e($errors->first('phone', ':message')); ?></small>
                </div>

                  
                <div class="form-group">
                    <label for="address" class="form-label">Street</label>
                    <input type="text" name="address" id="address" value="<?php echo e(old('address')); ?>" placeholder="Enter new address" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('address', ':message')); ?></small>
                </div>

                
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" value="<?php echo e(old('city')); ?>" placeholder="Enter new city" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('city', ':message')); ?></small>
                </div>

                
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" value="<?php echo e(old('country')); ?>" placeholder="Enter new country" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('country', ':message')); ?></small>
                </div>

                
                <div class="form-group">
                    <label for="zip_code" class="form-label">Zip code</label>
                    <input type="text" name="zip_code" id="zip_code" value="<?php echo e(old('zip_code')); ?>" placeholder="Enter new street" class="form-control">
                    <small class="text-danger"><?php echo e($errors->first('zip_code', ':message')); ?></small>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto mt-2">
              <div class="bg-white shadow p-5">
                  <h3 class="color">Credit card</h3>
                  <hr>
                <div class="form-group">
                    <label for="username" class="form-label">Full name (on the card)</label>
                    <input type="text" name="username" value="<?php echo e(old('username')); ?>" placeholder="Jason Doe" class="form-control">
                    <?php echo $errors->first('username', '<small class="text-danger">:message</small>'); ?>

                  </div>
  
                  <div class="form-group">
                    <label for="cardNumber" class="form-label">Card number</label>
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
                        <label class="form-label"><span>Expiration</span></label>
                        <div class="input-group">
                          <input type="number" value="<?php echo e(old('month')); ?>" placeholder="MM" name="month" value="<?php echo e(old('month')); ?>" class="form-control">
                          <input type="number" placeholder="YY" name="year" value="<?php echo e(old('year')); ?>" class="form-control">
                        </div>
                        <?php echo $errors->first('month', '<small class="text-danger">:message</small>'); ?>

                        <?php echo $errors->first('year', '<small class="text-danger">:message</small>'); ?>

                      </div>
                    </div>
  
                    <div class="col-sm-4">
                      <div class="form-group mb-4">
                        <label class="form-label" data-toggle="tooltip" for="cvv" title="Three-digits code on the back of your card">CVV
                          <i class="fa fa-question-circle"></i>
                        </label>
                        <input type="number" name="cvv" value="<?php echo e(old('cvv')); ?>" class="form-control" placeholder="123">
                        <?php echo $errors->first('cvv', '<small class="text-danger">:message</small>'); ?>

                      </div>
                    </div>
                    <input type="number" name="tree_id" value="<?php echo e($tree[0]->id); ?>" hidden>
              </div>
              <button type="submit" class="btn btn-danger text-white form-control">Order</button>
            </div>
        </div>
        </div>
    </form>
</div>

<input type="text" id="add" value="<?php echo e(Auth::user()->address); ?>" hidden>
<input type="text" id="cit" value="<?php echo e(Auth::user()->city); ?>" hidden>
<input type="text" id="sta" value="<?php echo e(Auth::user()->country); ?>" hidden>
<input type="text" id="zip" value="<?php echo e(Auth::user()->zip_code); ?>" hidden>
<input type="text" id="pho" value="<?php echo e(Auth::user()->phone); ?>" hidden>

<script>
    function myFunction () {
      var quantity = document.getElementById("quantity").value;
      document.getElementById('wr_quantity').innerHTML = "";
      var price = document.getElementById("price").value;
      var total = quantity * price;
      var show_total = total.toFixed(2);
      document.getElementById("total").innerHTML = "$"+show_total;
    }
    function order () {
        document.getElementById("address").value = document.getElementById("add").value;
        document.getElementById("city").value = document.getElementById("cit").value;
        document.getElementById("country").value = document.getElementById("sta").value;
        document.getElementById("zip_code").value = document.getElementById("zip").value;
        document.getElementById("phone").value = document.getElementById("pho").value;
    }
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/application/orders.blade.php ENDPATH**/ ?>