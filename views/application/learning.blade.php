@extends('Container.HeaderAndFooter')

@section('CodeHere')
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color">E-Learning</h1>
    <hr>

    <!-- Blog Post -->
    @foreach ($learning as $video)
    <div class="card mb-4 border-0 rounded-0 shadow">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-4">
            <a href="{{ $video->link }}" target="_blank">
              <img class="img-fluid rounded" src="{{ $video->image }}" alt="">
            </a>
          </div>
          <div class="col-lg-8">
            <h3 class="card-title color">{{ $video->title }}</h3>
            <p class="card-text">{{ $video->description }}</p>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <span class="color">Posted on {{ $video->postdate }}</span>
      </div>
    </div>
    @endforeach

  </div>
  <!-- /.container -->
@endsection