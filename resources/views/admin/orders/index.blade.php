@extends('admin.layout.admin')


@section('content')
<h3>Orders</h3>
<div class="col-md-8 col-md-offset-3">
<table class="table table-hover">
        <thead>
        <tr>
           <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>No of Items</th>
            <th>Total</th>
       </tr> </thead>
        <tbody>
         @foreach($orders as $order )
        <tr>
            <td>{{$order->name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->items}}</td>
            <td>₦{{$order->total}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection