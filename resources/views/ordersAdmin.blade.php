@extends('masterAdmin')
@section('content')


<h1 class="customer_order text-center text-position"><b>Customer's Orders</b></h1>

<div class="container content-space table-size">
    <table class="table table-order table-striped table-responsive  ">
        <tr>
            <th class="table-order-head table-sticky-head">Id</th>
            <th class="table-order-head table-sticky-head">Product id</th>
            <th class="table-order-head table-sticky-head">Address</th>
            <th class="table-order-head table-sticky-head">Status</th>
            <th class="table-order-head table-sticky-head">Payment Method</th>
    
        </tr>
        @foreach ($orders as $order)
            <tr>
                <td>{{$order['user_id']}}</td>
                <td>{{$order['product_id']}}</td>
                <td>{{$order['address']}}</td>
                <td><input type="checkbox"><span> Delevered</span></td>
                <td>{{$order['payment_method']}}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection