@extends('Container.HeaderAndFooter')

@section('CodeHere')
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/images/KidWithTree.jpg')">
          <div class="carousel-caption">
            <a href="/" class="text-white" style="text-decoration: none;">
              <h3>500 Trees for kids</h3>
              <p>You can donate money for growing the trees</p>
            </a>

            <a href="/etree/donate" class="btn text-white btn-danger">Donate</a>

            <a href="/etree/list-donation" class="btn text-white btn-danger">List all donation</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">
    <h3 class="my-4 color">Events comming soon!!!</h3>
    <!-- Marketing Icons Section -->
    <div class="card-group">
      @foreach ($events as $event)
      <?php
        if ($i == 1) {
          $bg_color = 'bg-primary';
        } else if ($i == 2) {
          $bg_color = 'bg-danger';
        } else if ($i == 3) {
          $bg_color = 'bg-warning';
        } else {
          $bg_color = 'bg-success';
          $i = 0;
        }
        $i++;
      ?>
      <div class="col-lg-3">
        <div class="card text-white rounded-0 {{ $bg_color }} h-100">
          <h4 class="card-header border-0">{{ $event->title }}</h4>
          <div class="card-body border-0">
            <p class="card-text">{{ $event->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h3 class="color mt-4">Our Top Trees</h3>
    <hr>

    <div class="row">
      @foreach ($trees as $tree)
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 rounded-0 h-100 shadow">
            <a href="/etree/detail/{{ $tree->id }}"><img class="card-img-top rounded-0" src="{{ $tree->image }}" alt=""></a>
            <div class="card-body border-0">
              <h4 class="card-title">
                <a href="/etree/detail/{{ $tree->id }}" class="text-decoration-none">{{ $tree->name }}</a>
              </h4>
              <h5 class="text-danger">${{ $tree->price }}</h5>
              <p class="card-text">{{ $tree->shotdesc }}</p>
            </div>
            <a href="/etree/store/order/{{ $tree->id }}" class="card-footer border-0 rounded-0 text-white btn btn-danger">
              Order now
            </a>
        </div>
      </div>
      @endforeach
    </div>
    <hr>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2 class="color">Our Features</h2>
        <p>There are our features:</p>
        <ul>
          <li>We have Trees store</li>
          <li>We have events for customer</li>
          <li>We have donate for cambodia</li>
          <li>We have E-Learning</li>
        </ul>
        <p>Currently, We are looking for our evvironment which similar to down a little by little
         
          In our startup concept is going through to run up a business in combodia.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="/images/Taphrom.jpg" alt="">
      </div>
    </div>
    <!-- Our Customers -->
    <h3 class="color">Our Partner</h3>
    <hr>
    <div class="row">
      @foreach ($partners as $partner)
      <div class="col-lg-2 col-sm-4 mb-4">
        <img class="img-fluid shadow" src="{{ $partner->image }}" alt="">
      </div>
      @endforeach
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
@endsection