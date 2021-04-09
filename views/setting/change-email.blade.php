@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change email</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-email') }}" method="POST">
                @csrf
                {{-- Email --}}
                <div class="form-group">
                    <label for="email" class="form-label"><strong>Your old Email <span class="color">{{ Auth::user()->email }}</span></strong></label>
                    <input type="text" value="{{ old('email') }}" name="email" id="email" class="form-control" placeholder="Enter new Email">
                    <small class="text-danger">{{ $errors->first('email', ':message') }}</small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection