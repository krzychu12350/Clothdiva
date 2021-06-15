@extends('layouts.app')
@section('homepage')

<!--Banner Section Begin
<section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8 m-auto">
                <div class="banner__slider owl-carousel">
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Kate Collection</span>
                            <h1>Most wanted</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Chloe Collection</span>
                            <h1>Most wanted</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                    <div class="banner__item">
                        <div class="banner__text">
                            <span>The Jack Collection</span>
                            <h1>Most wanted</h1>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
Banner Section End-->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
<section class="mt-1">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
  @foreach($banner_image as $single_image)
    <li data-target="#carouselExampleIndicators" data-slide-to="{{$single_image->id_banner_image}}" class=""></li>
    @endforeach
    <!--
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    -->
  </ol>
  <div class="carousel-inner">
    <!--
    <div class="carousel-item active">
    

     <div class="carousel-caption d-none d-md-block">
        <h2>Git</h5>
        <p>pupa</p>
     </div>
         <div class="carousel-caption d-none d-md-block banner__text">
            <span>The Chloe Collection</span>
            <h1>Most wanted</h1>
            <a href="#">Shop now</a>
        </div>  
 
  
    <div class="carousel-caption d-none d-md-block banner__text">
            <span></span>
            <h1>Most wanted</h1>
            <a href="#">Shop now</a>
        </div> 
    <img class="d-block w-100" style="height:900px !important" src="img/banner/banner-1.jpg" alt="First slide">
    </div> -->
    
    @foreach($banner_image as $single_image)
    <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block banner__text">
            <span>{{$single_image->paragraph_small}}</span>
            <h1>{{$single_image->paragraph_large}}</h1>
            <a href="{{$single_image->link_href}}">{{$single_image->link_desc}}</a>
        </div>  
      <img class="d-block w-100" style="height:900px !important" src="{{$single_image->path_to_image}}" alt="Second slide">
    </div>
    @endforeach
    <!--
    <div class="carousel-item">
    <div class="carousel-caption d-none d-md-block banner__text">
            <span>The Chloe Collection</span>
            <h1>Most wanted</h1>
            <a href="#">Shop now</a>
        </div>  
      <img class="d-block w-100" style="height:900px !important" src="img/banner/banner-3.jpg" alt="Third slide">
    </div>
  </div>
    -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
@endsection