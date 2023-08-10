@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result of Products</h4>
            <a href="ordernow" class="btn btn-success" >Order Now</a> <br><br>
            @foreach ($products as $item)
            <div class="cart-list-devider row ">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="image">
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </a>
                </div>

                <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                </div>
            </div>
        </div>
        @endforeach
        
    <a href="ordernow" class="btn btn-success" >Order Now</a> <br><br>
    </div>
    
</div>

@endsection