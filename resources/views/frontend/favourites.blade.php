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
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
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
                                        <img src="img/shop-cart/cp-1.jpg" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>{{$single_fav_product->name}}</h6>
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
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                                @endforeach
                                <!--
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="img/shop-cart/cp-2.jpg" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>Big bag</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">170.0 PLN</td>
                                   
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="cart__total">$ 170.0</td>
                                 
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="img/shop-cart/cp-3.jpg" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>Black jeans</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">80.0 PLN</td>
                                    <!--
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="cart__total">$ 170.0</td>
                                  
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>
                                <tr>
                                    <td class="cart__product__item">
                                        <img src="img/shop-cart/cp-4.jpg" alt="">
                                        <div class="cart__product__item__title">
                                            <h6>Green Shirt</h6>
                                        </div>
                                    </td>
                                    <td class="cart__price">55.0 PLN</td>
                                  
                                    <td class="cart__quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </td>
                                    <td class="cart__total">$ 110.0</td>
                                   
                                    <td class="cart__close"><span class="icon_close"></span></td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Favourites Section End -->
@endsection