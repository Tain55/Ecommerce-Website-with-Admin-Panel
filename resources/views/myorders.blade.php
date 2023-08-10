@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My orders</h4>
            @foreach ($orders as $item)
            <div class="cart-list-devider row ">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="image">
                    </a>
                </div>

                <div class="col-sm-4">
                    
                    <div class="">
                        <a href="detail/{{$item->id}}"><h2>Name: {{$item->name}}</h2></a>
                        <h5>Delivery Status : {{$item->status}}</h5>
                        <h5>Address : {{$item->address}}</h5>
                        <h5>Payment Status : {{$item->payment_status}}</h5>
                        <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
                
                </div>

                <div class="col-sm-3">
                        
                </div>
            </div>
        </div>
        @endforeach
        
     <br><br>
    </div>
    
</div>

@endsection