<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/modern-business.css">

    <title>E-Tree</title>
    <link rel="icon" class="rounded-circle" href="/images/Logo.jpg">
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg text-center navbar-light bg-white shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="/images/Logo.jpg" class="rounded-circle logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: #94BD3D" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #94BD3D" href="/etree/store">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #94BD3D" href="/etree/learning">Learning</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #94BD3D" href="/etree/events">Events</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #94BD3D" href="/etree/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #94BD3D" href="/etree/about">About</a>
              </li>
            </ul>
            <div class="navbar-nav">
            
            <?php if(!Auth::check()): ?>
                <a class="btn btn-danger mx-1 mb-1" href="/etree/register">Register</a>
                <a class="btn btn-danger mx-1 mb-1" href="/etree/login">Login</a>
            <?php endif; ?>

            <?php if(Auth::check()): ?>
            <div class="dropdown dropstart">
              <button class="btn btn-white" style="background-color: #F8F9FA; border-color: #F8F9FA;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo e(Auth::user()->firstname); ?> <?php echo e(Auth::user()->lastname); ?> <img src="<?php echo e(Auth::user()->image); ?>" class="rounded-circle logo" alt="">
              </button>
              <ul class="nav-item text-center text-lg-start dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/etree/account">My Account</a></li>
                <li><a class="dropdown-item" href="/etree/ordered-history">My Orders</a></li>
                <li><a class="dropdown-item" href="/etree/donated-history">Donated History</a></li>
                <li><a class="dropdown-item" href="/logout">Log Out</a></li>
              </ul>
            </div>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </nav>

      <?php echo $__env->yieldContent('CodeHere'); ?>
      <button onclick="topFunction()" class="btn-info" id="myBtn" title="Go to top"><img src="/images/up-sign.png" style="height: 40px" alt=""></button>
      <footer class="py-4 text-white text-center text-lg-start shadow" style="background-color: #94BD3D">
        <div class="container">
          <div class="row">
            
            <div class="col-lg-3 col-sm-6 border-end">
              <h5>Follow us</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="https://www.facebook.com" class="text-white text-decoration-none"><img class="follow" src="/images/facebook.png" style="height: 28px"> </a>
                  <a href="https://www.youtube.com" class="text-white text-decoration-none"> <img class="follow" src="/images/youtube.png" style="height: 30px"></a>
                  <a href="https://www.twitter.com" class="text-white text-decoration-none"> <img class="follow" src="/images/twitter.png" style="height: 30px"></a>
                  <a href="https://www.instagram.com" class="text-white text-decoration-none"> <img class="follow" src="/images/instagram.png" style="height: 28px"></a>
                </li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-6 border-end">
              <h5>Customer Service</h5>
              <ul class="list-unstyled">
                <li><a href="/tree/contact" class="text-white text-decoration-none text">Contact us</a></li>
                <li><a href="/tree/store" class="text-white text-decoration-none text">Tree store</a></li>
                <li><a href="/tree" class="text-white text-decoration-none text">Videos learning</a></li>
              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-6">
              <h5>Help</h5>
              <ul class="list-unstyled">
                <li><a href="/" class="text-white text-decoration-none text">Support</a></li>
                <li><a href="/" class="text-white text-decoration-none text">FAQs</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-sm-6">
              <a href="/etree"><img src="/images/Logo.jpg" class="footerlogo shadow" alt=""></a>
              <p>We do not ship Live Plants outside the Continental.</p>
            </div>
          </div>
          <hr>
          <p class="text-center">Copyright ©2020 E-Tree (Cambodia). All rights reserved.</p>
        </div>
        <!-- /.container -->
      </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="/js/console.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://use.fontawesome.com/e58c9aaf2a.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html><?php /**PATH /Applications/MAMP/htdocs/Tree/resources/views/container/HeaderAndFooter.blade.php ENDPATH**/ ?>