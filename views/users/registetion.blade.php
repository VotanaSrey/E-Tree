@extends('Container.html')

@section('content')
<div class="container-fluid">
    <div class="row no-gutter">
      <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
      <div class="col-md-8 col-lg-6">
        <div class="login d-flex align-items-center py-5">
          <div class="container">
            <div class="row">
              <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Welcome To Register!</h3>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                <form method="POST" action="{{ route('store') }}">
                  @csrf

                  {{-- email --}}
                  <div class="form-label-group">
                    <input type="text" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Email address">
                    <label for="email">Email address</label>
                    {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                  </div>

                  {{-- firstname --}}
                  <div class="form-label-group">
                    <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" class="form-control" placeholder="First name">
                    <label for="firstname">First name</label>
                    {!! $errors->first('firstname', '<small class="text-danger">:message</small>') !!}
                  </div>

                  {{-- lastname --}}
                  <div class="form-label-group">
                    <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" class="form-control" placeholder="Last name">
                    <label for="lastname">Last name</label>
                    {!! $errors->first('lastname', '<small class="text-danger">:message</small>') !!}
                  </div>

                  {{-- password --}}
                  <div class="form-label-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <label for="password">Password</label>
                    {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                  </div>

                  {{-- password --}}
                  <div class="form-label-group">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                    <label for="confirm_password">Confirm Password</label>
                    {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                  </div>

                  {{-- Submit button --}}
                  <button class="btn btn-lg text-white btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>

                  {{-- Go to login page --}}
                  <div class="text-center">
                    <a class="small" href="/etree/login">Go To Login</a></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
@endsection