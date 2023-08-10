<?php
use App\Http\Controllers\ProductController;
$total = 0;

if (Session::has('user')) {
  $total = ProductController::cartItem();
}

?>

<nav class="navbar navbar-default navebar-style">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/home">Home</span></a></li>
        <li class=""><a href="/myorders">Orders</span></a></li>
        
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">Cart({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">{{Session::get('user')['name']}}
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/logout">Logout</a></li>

          </ul>
        </li>
        @else
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 