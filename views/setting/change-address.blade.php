@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change address</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-address') }}" method="POST">
                @csrf
                {{-- address --}}
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" value="{{ old('address') }}" placeholder="Enter new address" class="form-control">
                    <small class="text-danger">{{ $errors->first('address', ':message') }}</small>
                </div>

                {{-- city --}}
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" value="{{ old('city') }}" placeholder="Enter new city" class="form-control">
                    <small class="text-danger">{{ $errors->first('city', ':message') }}</small>
                </div>

                {{-- country --}}
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" value="{{ old('country') }}" placeholder="Enter new country" class="form-control">
                    <small class="text-danger">{{ $errors->first('country', ':message') }}</small>
                </div>

                {{-- zip_code --}}
                <div class="form-group">
                    <label for="zip_code" class="form-label">Zip code</label>
                    <input type="text" name="zip_code" value="{{ old('zip_code') }}" placeholder="Enter new street" class="form-control">
                    <small class="text-danger">{{ $errors->first('zip_code', ':message') }}</small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection