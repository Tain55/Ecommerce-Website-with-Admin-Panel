@extends('masterAdmin')
@section('content')
    
    <div class="container content-space">
        <h1>Add a new product</h1>

    
        <form action="add" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" placeholder="Enter Product name"><br> <br>
            <input type="text" name="price" placeholder="Enter Product price"><br><br>
            <input type="text" name="category" placeholder="Select Category"><br><br>
            <input type="text" name="description" placeholder="Give small discription"><br><br>
            <input type="file" name="image"><br><br>
            
            <button type="submit" class="btn btn-success">Add Product</button>
        </form>
    </div>
@endsection
