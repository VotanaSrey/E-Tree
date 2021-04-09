@extends('container.HeaderAndFooter')

@section('CodeHere')
<div class="container py-5">
    <div class="row">
      <div class="col-lg-7 mx-auto">
        <div class="bg-white shadow p-5">

            <h2 class="color">Your Donations</h2>
            <hr>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($donations as $donation)
                        <tr>
                            <th scope="row">{{ $i }}</th>
                            <td class="text-danger">${{ $donation->amount }}</td>
                            <td>{{ $donation->created_at->toDateString() }}</td>
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