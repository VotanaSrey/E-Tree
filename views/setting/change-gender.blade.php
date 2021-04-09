@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change Gender</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-gender') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <small class="text-danger">{{ $errors->first('gender', ':message') }}</small>
                </div>
                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection