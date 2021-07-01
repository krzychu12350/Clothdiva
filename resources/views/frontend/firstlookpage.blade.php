@extends('layouts.app')
@section('homepage')

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

        </ol>
        <div class="carousel-inner">
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