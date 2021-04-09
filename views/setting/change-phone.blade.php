@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Change phone</h2>

            @if (Session::has('success'))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif

            @php
                Session::forget('success');
            @endphp
            
            <hr>
            <form class="pb-3" action="{{ route('update-phone') }}" method="POST">
                @csrf
                {{-- phone --}}
                <div class="form-group">

                    @if (Auth::user()->phone != null)
                        <label for="phone" class="form-label"><strong>Your old phone <span class="color">+855 {{ Auth::user()->phone }}</span></strong></label>
                    @endif

                    @if (Auth::user()->phone == null)
                        <label for="phone" class="form-label">Add your phone</label>
                    @endif

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0 rounded-start">+855</span>
                        </div>
                     <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Enter new phone" class="form-control">
                    </div>
                    <small class="text-danger">{{ $errors->first('phone', ':message') }}</small>
                </div>

                <button class="btn btn-danger mt-2 float-end" type="submit">Change</button>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection