@extends('layouts.app')
@section('content')
 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="#">{{$category_name}}</a>
                        <span>{{$product['name']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__left product__thumb nice-scroll">
                            <?php
                            $i = 1
                            ?>
                            @foreach($images as $image)
                         
                            <a class="pt active" href="#photo-{{$i}}">
                                <img src='{{ asset("$image->image.jpg") }}' alt="">
                            </a>
                            <?php
                            $i++
                            ?>
                            @endforeach
                          
                            <!--
                            <a class="pt" href="#product-2">
                                <img src="{{ asset('storage/images/tracksuits.jpg') }}"  alt="">
                            </a>
                            <a class="pt" href="#product-3">
                                <img src="{{ asset('storage/images/suit-1.jpg') }}"  alt="">
                            </a>
                            <a class="pt" href="#product-4">
                                <img src="{{ asset('img/product/details/product-4.jpg') }}"  alt="">
                            </a>
                            -->
                        </div>
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                            
                                <?php
                                $i = 1
                                ?>
                                @foreach($images as $image)
                            
                                <img data-hash="photo-{{$i}}" class="product__big__img" src='{{ asset("$image->image.jpg") }}' alt="">
                                <!--
                                <img data-hash="product-2" class="product__big__img" src="{{ asset('storage/images/tracksuits.jpg') }}" alt="">
                                <img data-hash="product-3" class="product__big__img" src="{{ asset('storage/images/suit-1.jpg') }}" alt="">
                                <img data-hash="product-4" class="product__big__img" src="{{ asset('img/product/details/product-4.jpg') }}" alt="">-->
                                <?php
                                $i++
                                ?>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>
                        {{$product['name']}} - {{$product['size_of_product']}}
              
                        <!--<span>Brand: SKMEIMore Men Watches from SKMEI</span>-->
                         </h3>
                        <div class="product__details__price">$ {{$product['prize']}}<span>$ 83.0</span></div>
                        <p></p>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="number" value="1" max="{{$product['quantity']}}">
                                </div>
                            </div>
                            <a href="{{ url('add-to-cart/'.$product['id_product']) }}" class="cart-btn"><span class="icon_cart_alt"></span> Add to cart</a>
                         
                            
                            <ul>
                                <li><a href="{{ route('add.favourite', ['id' => $product['id_product']]) }}"><span class="icon_heart_alt"></span></a></li>
                                <!-- <li><a href="#"><span class="icon_adjust-horiz"></span></a></li> -->
                            </ul>

                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <!--
                                <li>
                                    <span>Availability:</span>
                                    <div class="stock__checkbox">
                                        <label for="stockin">
                                            In Stock
                                            <input type="checkbox" id="stockin">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </li>
                                -->
                                <li>
                                    <span>Available color:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>
                                    </div>
                                </li>
                                <!--
                                <li>
                                    <span>Available size:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">
                                           {{$product['size_of_product']}}
                                        </label>
                                        <label for="s-btn">
                                            <input type="radio" id="s-btn">
                                            s
                                        </label>
                                        <label for="m-btn">
                                            <input type="radio" id="m-btn">
                                            m
                                        </label>
                                        <label for="l-btn">
                                            <input type="radio" id="l-btn">
                                            l
                                        </label>
                                    </div>
                                </li>
                                -->
                                <li>
                                    <span>Promotion:</span>
                                    <p>-15%</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Composition and Conservation</a>
                            </li>
                       
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Description</a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Reviews ( 2 )</a>
                            </li>-->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <!--<h6>Description</h6>-->
                                <p>{{$product['composition_and_conservation']}}</p>
                            </div>
                      
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <p>{{$product['description']}}</p>
                            </div>
                            <!--
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <h6>Reviews ( 2 )</h6>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed
                                    quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt loret.
                                    Neque porro lorem quisquam est, qui dolorem ipsum quia dolor si. Nemo enim ipsam
                                    voluptatem quia voluptas sit aspernatur aut odit aut loret fugit, sed quia ipsu
                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Nulla
                                consequat massa quis enim.</p>
                            </div>
                             -->
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->


@endsection