@extends('master')
@section('content')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('cssfiles/products_style.css')}}">
  </head>
    <body>
      <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
           @foreach ($banner as $item => $id)
              <div class="item {{$item==0?'active':''}}">
                <a href="{{$id['link']}}">
                  <img class="slider-img" src="{{$id['photos']}}" alt="banners">
                </a>
              </div>
            @endforeach
        
          </div>
        
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div>
          <h2>Trending Products</h2>
        </div>

        <div class="trending-wrapper">
          @foreach ($product as $item)
            <div class="trending-item">
              <a href="detail/{{$item['id']}}">
                <div class="trending-image-pos">
                  <img class="trending-image" src="{{$item['gallery']}}" alt="image">
                </div>
                <div class="trending-text">
                  <h3>{{$item['name']}}</h3>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      
      </div> 
    </body>
  </html>
@endsection
