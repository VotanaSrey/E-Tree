@extends('Container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <form action="{{ route('store-order') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-7 mx-auto">
              <div class="bg-white shadow p-5">
                  <h3 class="color">{{ $tree[0]->name }}</h3>
                  <hr>
                  <img src="{{ $tree[0]->image }}" alt="">
                  <h4 class="mt-2">Price: <span class="text-danger">${{ $tree[0]->price }}</span></h4>
                  <p>{{ $tree[0]->shotdesc }}</p>
                  <hr>

                  <input type="number" name="price" id="price" value="{{ $tree[0]->price }}" hidden>
                  <div class="form-group">
                      <label for="quantity" class="form-label">Quantity</label>
                      <input type="number" name="quantity" id="quantity" value="{{ old('uantity') }}" class="form-control" placeholder="How many trees do you need ?" oninput="myFunction()">
                      <small class="text-danger">{{ $errors->first('quantity', ':message') }}</small>
                      <small class="text-danger" id="wr_quantity"></small><br>
                      <h5>Total price: <span class="text-danger" id="total"></h5></small>
                  </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto mt-2">
              <div class="bg-white shadow p-5">
                <h3 class="color">Phone and Address</h3>
                <hr>
                @if (Auth::user()->address != null && Auth::user()->city != null && Auth::user()->country != null)
                  <h6>Do you want to use information in your account ?</h6>
                  <a class="btn btn-danger" onclick="order()">Okay</a>
                  <hr>
                @endif

                {{-- phone --}}
                <div class="form-group">
                <label for="phone" class="form-label">Add your phone</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text rounded-0 rounded-start">+855</span>
                  </div>
                <input type="number" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Enter new phone" class="form-control">
                </div>
                <small class="text-danger">{{ $errors->first('phone', ':message') }}</small>
                </div>

                  {{-- address --}}
                <div class="form-group">
                    <label for="address" class="form-label">Street</label>
                    <input type="text" name="address" id="address" value="{{ old('address') }}" placeholder="Enter new address" class="form-control">
                    <small class="text-danger">{{ $errors->first('address', ':message') }}</small>
                </div>

                {{-- city --}}
                <div class="form-group">
                    <label for="city" class="form-label">City</label>
                    <input type="text" name="city" id="city" value="{{ old('city') }}" placeholder="Enter new city" class="form-control">
                    <small class="text-danger">{{ $errors->first('city', ':message') }}</small>
                </div>

                {{-- country --}}
                <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" name="country" id="country" value="{{ old('country') }}" placeholder="Enter new country" class="form-control">
                    <small class="text-danger">{{ $errors->first('country', ':message') }}</small>
                </div>

                {{-- zip_code --}}
                <div class="form-group">
                    <label for="zip_code" class="form-label">Zip code</label>
                    <input type="text" name="zip_code" id="zip_code" value="{{ old('zip_code') }}" placeholder="Enter new street" class="form-control">
                    <small class="text-danger">{{ $errors->first('zip_code', ':message') }}</small>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7 mx-auto mt-2">
              <div class="bg-white shadow p-5">
                  <h3 class="color">Credit card</h3>
                  <hr>
                <div class="form-group">
                    <label for="username" class="form-label">Full name (on the card)</label>
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Jason Doe" class="form-control">
                    {!! $errors->first('username', '<small class="text-danger">:message</small>') !!}
                  </div>
  
                  <div class="form-group">
                    <label for="cardNumber" class="form-label">Card number</label>
                    <div class="input-group">
                      <input type="text" name="cardNumber" value="{{ old('cardNumber') }}" placeholder="Your card number" class="form-control">
                      <div class="input-group-append">
                        <span class="input-group-text bg-white border-0 color">
                          <i class="fa fa-cc-visa mx-1"></i>
                          <i class="fa fa-cc-amex mx-1"></i>
                          <i class="fa fa-cc-mastercard mx-1"></i>
                        </span>
                      </div>
                    </div>
                    {!! $errors->first('cardNumber', '<small class="text-danger">:message</small>') !!}
                  </div>
  
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <label class="form-label"><span>Expiration</span></label>
                        <div class="input-group">
                          <input type="number" value="{{ old('month') }}" placeholder="MM" name="month" value="{{ old('month') }}" class="form-control">
                          <input type="number" placeholder="YY" name="year" value="{{ old('year') }}" class="form-control">
                        </div>
                        {!! $errors->first('month', '<small class="text-danger">:message</small>') !!}
                        {!! $errors->first('year', '<small class="text-danger">:message</small>') !!}
                      </div>
                    </div>
  
                    <div class="col-sm-4">
                      <div class="form-group mb-4">
                        <label class="form-label" data-toggle="tooltip" for="cvv" title="Three-digits code on the back of your card">CVV
                          <i class="fa fa-question-circle"></i>
                        </label>
                        <input type="number" name="cvv" value="{{ old('cvv') }}" class="form-control" placeholder="123">
                        {!! $errors->first('cvv', '<small class="text-danger">:message</small>') !!}
                      </div>
                    </div>
                    <input type="number" name="tree_id" value="{{ $tree[0]->id }}" hidden>
              </div>
              <button type="submit" class="btn btn-danger text-white form-control">Order</button>
            </div>
        </div>
        </div>
    </form>
</div>

<input type="text" id="add" value="{{ Auth::user()->address }}" hidden>
<input type="text" id="cit" value="{{ Auth::user()->city }}" hidden>
<input type="text" id="sta" value="{{ Auth::user()->country }}" hidden>
<input type="text" id="zip" value="{{ Auth::user()->zip_code }}" hidden>
<input type="text" id="pho" value="{{ Auth::user()->phone }}" hidden>

<script>
    function myFunction () {
      var quantity = document.getElementById("quantity").value;
      document.getElementById('wr_quantity').innerHTML = "";
      var price = document.getElementById("price").value;
      var total = quantity * price;
      var show_total = total.toFixed(2);
      document.getElementById("total").innerHTML = "$"+show_total;
    }
    function order () {
        document.getElementById("address").value = document.getElementById("add").value;
        document.getElementById("city").value = document.getElementById("cit").value;
        document.getElementById("country").value = document.getElementById("sta").value;
        document.getElementById("zip_code").value = document.getElementById("zip").value;
        document.getElementById("phone").value = document.getElementById("pho").value;
    }
</script>

@endsection