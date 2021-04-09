@extends('container.HeaderAndFooter')

@section('CodeHere')
<div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto mt-4 mb-3 mt-lg-5 mb-lg-5">
        <div class="bg-white shadow p-4 p-lg-5">

            <h2 class="color">Your orders</h2>
            
            @if (Session::has('success'))
                <div class="alert alert-danger">{{ Session::get('success') }}</div>
                @php
                    Session::forget('success');
                @endphp
            @endif

            <hr>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Tree</th>
                        <th scope="col">Date</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->quantity }} <a class="color" href="/etree/detail/{{ $order->tree_id }}">{{ $order->tree_name }}</a></td>
                            <td>{{ $order->created_at->toDateString() }}</td>
                            <td><a class="color" href="/etree/ordered-history/detail/{{ $order->id }}">More</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>
</div>
@endsection