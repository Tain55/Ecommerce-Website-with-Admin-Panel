@extends('masterAdmin')
@section('content')
    <div class="content-space">
        <h1 class="customer_order text-center text-position"><b>All Banners</b></h1>
        <form action="addbanner" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="link" placeholder="Give product or category link"><br><br>
            <input type="file" name="image"><br><br>
            
            <button type="submit" class="btn btn-success">Add Banner</button>
        </form>
    </div>
    <div class="content-space-top">
        <div class="container content-space  table-size">
            <table class="table table-order table-striped table-responsive">
                <tr>
                    <th class="table-order-head">Photo</th>
                    <th class="table-order-head">Link</th>
                    <th class="table-order-head">Edit</th>  
                    <th class="table-order-head">Delete</th>  
                </tr>
                @foreach ($banners as $banner)
                        <tr>
                            <td><img src="{{($banner['photos'])}}" height="100" width="200" alt="banner"></td>   
                            <td>{{$banner['link']}}</td>
                            <td><a href={{"#".$banner['id']}} class="btn btn-success">Edit</a></td>
                            <td><a href={{"deletebanner/".$banner['id']}} class="btn btn-danger" >Delete</a></td>   
                        </tr>
                @endforeach
            </table>
            <a href="add" class="btn btn-success center">Add Product</a><br>
    </div>
        
@endsection
