@extends('Container.HeaderAndFooter')

@section('CodeHere')
    <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3 color">{{ $tree[0]->name }}</h1>
    <hr>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{ $tree[0]->image }}" alt="">
        <hr>

        <!-- Post Content -->
        <h3 class="text-danger">${{ $tree[0]->price }}</h3>
        <p>{{ $tree[0]->longdesc }}</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4 brder-0 rounded-0 shadow">
          <h5 class="card-header">Comment</h5>
          <div class="card-body">
            <form method="POST" action="{{ route('comment') }}">
              @csrf
              <div class="form-group">
                <textarea class="form-control" name="comment" rows="3"></textarea>
                <small class="text-danger">{{ $errors->first('comment', ':message') }}</small>
              </div>
              <div class="form-group">
                <input type="number" class="form-control" name="treeId" value="{{ $tree[0]->id }}" hidden>
              </div>
              @if (Auth::check())
                <button type="submit" class="btn btn-danger mt-2 float-end">Submit</button>
              @endif
              @if (!Auth::check())
                <a href="/etree/login" class="btn btn-danger mt-2 float-end">Submit</a>
              @endif
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          @foreach ($comments as $comment)
          <img class="d-flex mr-3 rounded-circle" style="height: 40px" src="{{ $comment->image }}" alt="">
          <div class="media-body">
            <h5 class="mt-0">{{ $comment->name }}</h5>
            {{ $comment->comment }}
          </div>
          <hr>
          @endforeach
        </div>

      </div>
  
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection