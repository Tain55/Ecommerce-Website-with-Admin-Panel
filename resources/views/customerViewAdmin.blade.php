@extends('masterAdmin')
@section('content')
<h1 class="customer_view text-center text-position"><b>View Customers</b></h1>

<div class="container content-space table-size">
    <table class="table table-dark table-striped table-responsive">
        <tr>
            <th class="table-head table-sticky-head">Id</th>
            <th class="table-head table-sticky-head">Name</th>
            <th class="table-head table-sticky-head">Email</th>
            <th class="table-head table-sticky-head">Operation</th>
        </tr>

        @foreach ($customers as $customer)
        <tr>
            <td>{{$customer['id']}}</td>
            <td>{{$customer['name']}}</td>
            <td>{{$customer['email']}}</td>
            <td><a href={{"delete/".$customer['id']}} class="btn btn-danger" >Delete</a></td>
        </tr> 
        @endforeach
        
    </table>
    
    
</div>
@endsection

