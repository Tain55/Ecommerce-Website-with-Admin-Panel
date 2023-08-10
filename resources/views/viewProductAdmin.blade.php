@extends('masterAdmin')
@section('content')
    <h1 class="customer_order text-center text-position"><b>All Products</b></h1>

    

    <div class="container content-space table-size">
        <a href="add" class="table-sticky-head btn btn-success center">Add Product</a><br>
        <table class="table table-order table-striped table-responsive">
            <tr>
                <th class="table-sticky-head-product table-order-head">Id</th>
                <th class="table-sticky-head-product table-order-head">Name</th>
                <th class="table-sticky-head-product table-order-head">Price</th>
                <th class="table-sticky-head-product table-order-head">Category</th>
                <th class="table-sticky-head-product table-order-head">Description</th>
                <th class="table-sticky-head-product table-order-head">Photo</th>  
                <th class="table-sticky-head-product table-order-head">Edit</th>  
                <th class="table-sticky-head-product table-order-head">Delete</th>  
            </tr>
            @foreach ($products as $product)
                    <tr>
                        <td>{{$product['id']}}</td>
                        <td>{{$product['name']}}</td>
                        <td>{{$product['price']}}</td>
                        <td>{{$product['category']}}</td>
                        <td>{{$product['description']}}</td>
                        <td><img src="{{($product['gallery'])}}" height="100" width="100" alt=""></td>   
                        <td><a href={{"editproduct/".$product['id']}} class="btn btn-success">Edit</a></td>
                        <td><a href={{"deleteproduct/".$product['id']}} class="btn btn-danger" >Delete</a></td>
                        
                    </tr>
            @endforeach
        </table>
        <a href="add" class="btn btn-success center">Add Product</a><br>

    </div>
@endsection
