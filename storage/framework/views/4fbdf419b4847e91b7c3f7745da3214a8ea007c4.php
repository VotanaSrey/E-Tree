

<?php $__env->startSection('CodeHere'); ?>
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color">Location</h1>
    <hr>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe style="width: 100%; height: 400px; border: 0;" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;t=m&amp;ll=11.587788312230892,104.97958266145645&amp;spn=0.029431,0.035362&amp;z=12&amp;output=embed&amp;mid=1x9-ZhEGFU4yTY_OI1WsaA1BEQdA"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3 class="color">Contact Details</h3>
        <p>
            <strong>National Institute of Posts, Telecoms & ICT</strong>
            <br>2nd Bridge Prek Leap, National Road Number 6, 
            <br>Phnom Penh 12252
          <br>
        </p>
        <p>
          <strong title="Phone">Tel</strong>: +855 23 999 333
        </p>
        <p>
          <strong title="Email">Email</strong>:
          <a href="mailto:EtreeCambodia@gmail.com" class="color text-decoration-none">EtreeCambodia@gmail.com
          </a>
        </p>
        <p>
          <strong title="Hours">Hours</strong>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3 class="color">Send us a Message</h3>
        <hr>
        <?php if($message = Session::get('success')): ?>
          <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
          </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
          <div class="alert alert-danger">
            <strong>Whoop!</strong> There were some problems with your input. <br><br>
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        <?php endif; ?>
        <form action="<?php echo e(route('message')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="control-group form-group">
            <div class="controls">
              <label for="name"><strong>Name</strong></label>
              <input type="text" name="name" id="name" placeholder="Please enter your name (optional)" class="form-control" id="name">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label for="emai"><strong>Email</strong></label>
              <input type="text" class="form-control" name="email" id="email" placeholder="Please enter your email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label for="message"><strong>Message</strong></label>
              <textarea rows="10" cols="100" class="form-control" name="message" id="message" placeholder="Please enter your message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn mt-2 btn-danger text-white float-end" id="sendMessageButton">Send Message</button>
        </form>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Container.HeaderAndFooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\php\Tree\resources\views/Application/contact.blade.php ENDPATH**/ ?>