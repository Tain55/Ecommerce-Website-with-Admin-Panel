@extends('master')
@section('content')
    

    <div class="container content-space">

        <h1>Update product</h1>
        <form action="edit" method="POST">
            @csrf
            <input type="text" name="uid" value="{{$data['id']}}"><br>
            <input type="text" name="name" value="{{$data['name']}}"><br>
            <input type="text" name="price" value="{{$data['price']}}"><br>
            <input type="text" name="category" value="{{$data['category']}}"><br>
            <input type="text" name="description" value="{{$data['description']}}"><br>
            <input type="text" name="imageurl" value="{{$data['gallery']}}"><br>
            
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection