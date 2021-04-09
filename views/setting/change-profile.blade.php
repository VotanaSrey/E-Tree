@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change Profile</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image" class="form-label">Profile</label>
                    <input class="form-control" type="file" value="{{ old('image') }}" id="image" name="image" accept="image/*" onchange="preview(event)">
                    <small class="text-danger">{{ $errors->first('image', ':message') }}</small>
                    <img class="shadow mx-auto d-block mt-4" id="output_image" style="max-width: 200px">
                </div>
                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
<script>
    function preview (event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection