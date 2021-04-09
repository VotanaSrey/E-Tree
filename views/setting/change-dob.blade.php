@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change date of birth</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-dob') }}" method="POST">
                @csrf
                {{-- date of birth --}}
                <div class="form-group">

                    @if (Auth::user()->dob != null)
                        <label for="dob" class="form-label"><strong>Your old birthday <span class="color">{{ Auth::user()->dob }}</span></strong></label>
                    @endif

                    @if (Auth::user()->dob == null)
                        <label for="dob" class="form-label">Add your birthday</label>
                    @endif

                    <input type="date" value="{{ old('dob') }}" name="dob" id="dob" class="form-control" placeholder="Enter new date of birth">
                    <small class="text-danger">{{ $errors->first('dob', ':message') }}</small>
                </div>
                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection