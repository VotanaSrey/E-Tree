@extends('Container.HeaderAndFooter')

@section('CodeHere')
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color">Events</h1>
    <!-- Image Header -->
    <div id="carouselExampleIndicators" class="carousel slide shadow" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('/images/KidWithTree.jpg')">
          <div class="carousel-caption">
            <a href="/" class="text-white" style="text-decoration: none;">
              <h3>500 Trees for new kid</h3>
              <p>You can donate money for growing the trees</p>
            </a>
            <a class="btn text-white btn-danger">Donate</a>
            <a href="" class="btn text-white btn-danger">List all donate</a>
          </div>
        </div>
      </div>
    </div>
    <hr>

    <!-- Marketing Icons Section -->
    <div class="row mb-5">
      @foreach ($events as $event)
      <div class="col-lg-3">
        <div class="card rounded-0 border-0 shadow h-100">
          <h4 class="card-header border-0 color">{{ $event->title }}</h4>
          <div class="card-body border-0">
            <p class="card-text">{{ $event->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection