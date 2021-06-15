@extends('layouts.app')
@section('favourites')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                        <span>Favourites products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Favourites Section Begin -->
    <section class="shop-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <!--<th>Quantity</th>
                                    <th>Total</th>-->
                                    <th></th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                        
                            @foreach($favourite_products as $single_fav_product)
                                <tr>
                                    <td class="cart__product__item">
                                        <a href="/products/details/{{$single_fav_product->id_product}}">
                                            <img src="{{$single_fav_product->image_src}}.jpg" alt="">
                                            </a>
                                        <div class="cart__product__item__title">
                                        <a href="/products/details/{{$single_fav_product->id_product}}"><h6>{{$single_fav_product->name}} - {{$single_fav_product->size_of_product}}</h6></a>
                                        </div>
                                    </td>
                                    <td class="cart__price">$ {{$single_fav_product->prize}}</td>
                                     <!--
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="cart__total">$ 300.0</td>
                                    -->
                                    <td class="cart__close">
                            
                                    <a class="add__to__cart" href="{{ route('addtoCart', ['id' =>$single_fav_product->id_product,'quantity' => 1]) }}">
                                
                                    <span class="icon_cart"></span>
                                    </a>
                            
                                 
                                    <a class="favdel" onclick="handleDelete(event);" href="{{ route('del.favourite', ['id' => $single_fav_product->id_product]) }}">
                                    <span class="icon_close"></span>
                                    </a>

                                    </td>  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Favourites Section End -->
@endsection