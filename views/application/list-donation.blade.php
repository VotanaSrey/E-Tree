@extends('container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">

    <!-- For demo purpose -->
    <div class="row mb-4">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="display-4">500 Trees for new kids</h1>
      </div>
    </div>
    <!-- End -->
  
  
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Our Donators</h2>
            <hr>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($donations as $donation)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $donation->name }}</td>
                            <td class="text-danger">${{ $donation->amount }}</td>
                            <td>
                                @if ($donation->address == null)
                                    Empty
                                @endif
                                @if ($donation->address != null)
                                    {{ $donation->address }}
                                @endif
                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
@endsection