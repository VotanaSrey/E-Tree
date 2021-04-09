@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change name</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-name') }}" method="POST">
                @csrf
                {{-- First Name --}}
                <div class="form-group">
                    <label for="firstname" class="form-label"><strong>Your old first name <span class="color">{{ Auth::user()->firstname }}</span></strong></label>
                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter new first name">
                    <small class="text-danger">{{ $errors->first('firstname', ':message') }}</small>
                </div>
                {{-- Last Name --}}
                <div class="form-group">
                    <label for="lastname" class="form-label"><strong>Your old last name <span class="color">{{ Auth::user()->lastname }}</span></strong></label>
                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter new last name">
                    <small class="text-danger">{{ $errors->first('lastname', ':message') }}</small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection