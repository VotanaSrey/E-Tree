@extends('Container.HeaderAndFooter')

@section('CodeHere')
    <!-- Page Content -->
  <div class="container mb-4">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4 color">Category</h1>
        <div class="list-group border-0 rounded-0 shadow">
          @foreach ($categories as $category)
          <a href="/etree/store/{{ $category->id }}" class="list-group-item">{{ $category->category }}</a>
          @endforeach
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <form action="{{ route('search') }}" method="POST">
          @csrf
          <div class="p-1 bg-light rounded rounded-pill shadow-sm mt-4">
            <div class="input-group">
              <input type="text" placeholder="What're you searching for?" aria-describedby="button-addon1" name="search" class="form-control border-0 bg-light">
              <div class="input-group-append">
                <button id="button-addon1" style="background: white; border-color: white;" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
        <hr>

        <div class="row">
          @foreach ($trees as $tree)
          <div class="col-lg-4 col-md-6 mb-2">
            <div class="card h-100  border-0 rounded-0 shadow">
              <a href="/etree/detail/{{ $tree->id }}"><img class="card-img-top border-0 rounded-0" src="{{ $tree->image }}" alt=""></a>
              <div class="card-body border-0 rounded-0">
                <h4 class="card-title  border-0 rounded-0">
                  <a class="text-decoration-none" href="/etree/detail/{{ $tree->id }}">{{ $tree->name }}</a>
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
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection