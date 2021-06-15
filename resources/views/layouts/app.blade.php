<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/frontend/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/custom.css') }}" type="text/css">

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

    <!-- ICON USER -->
    <script src="https://kit.fontawesome.com/dadb75eae3.js" crossorigin="anonymous"></script>

  

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">  
            <li>
            @guest   
            <a href="{{ route('mobile') }}"><span class="far fa-user" aria-expanded="false"></span></a>
                @if (Route::has('register'))
                    @endif
                        @else
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <span class="fas fa-sign-out-alt" aria-expanded="false">
                                       </span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    
            @endguest
         
         
            </li>

            <li><span class=" mila icon_search search-switch"></span></li>
            <li>
            <a href="{{ route('favourites') }}"><span class=" kila icon_heart_alt"></span>
            @guest   
                            <div id="fav__count" class="tip">0</div>
                                @if (Route::has('register'))
                                @endif
                                    @else
                                        <?php
                                           $id = Auth::user()->id_ushop;

                                           $favourite_products = DB::table('favorite_products')
                                           ->where('favorite_products.id_ushop', '=', $id)
                                           ->count();
                                        ?>
                                        <div id="fav__count" class="tip">{{$favourite_products}}</div>
                            @endguest
            </a>
            </li>

            <li>
                <a href="{{ route('shopcart') }}"><span class="fila icon_cart_alt"></span>
                <div class="tip">{{ count((array) session('cart')) }}</div>
            </a>
            </li>
        </ul>
        
        <div class="offcanvas__logo">
            <a href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>

        <div>  


        <nav>
                        <ul style = "list-style-type: none;">
                            <li><a class="restlink" style = "color:black" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                          
                            <li class = "women_li"> Women <a style = "color: #dc3545">↓</a> </li>
                            <div class = " bg-white women_div all_div">    
                            @foreach($sub_categories_women as $sub_category_woman)
                            <ul class = "submenu-submenu">
                            <li class = "menu-item" style = "display: block"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Women','subcategory'=> $sub_category_woman->name_of_subcategory]) }}">{{$sub_category_woman->name_of_subcategory}}</a></li>
                            </ul>
                             @endforeach
                             </div>

                            <li class = "men_li"> Men <a style = "color: #dc3545">↓</a> </li>
                            <div class = " bg-white men_div all_div" style = "display:none">    
                            @foreach($sub_categories_men as $sub_category_man)
                            <ul class = "submenu-submenu">
                            <li class = "menu-item" style = "display: block"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Men','subcategory'=> $sub_category_man->name_of_subcategory]) }}">{{$sub_category_man->name_of_subcategory}}</a></li>
                            </ul>
                             @endforeach
                             </div>

                             <li class = "girls_li"> Girls <a style = "color: #dc3545">↓</a> </li>
                            <div class = " bg-white girls_div all_div" style = "display:none">    
                            @foreach($sub_categories_girls as $sub_category_girl)
                            <ul class = "submenu-submenu">
                            <li class = "menu-item" style = "display: block"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Girls','subcategory'=> $sub_category_girl->name_of_subcategory]) }}">{{$sub_category_girl->name_of_subcategory}}</a></li>
                            </ul>
                             @endforeach
                             </div>


                             <li class = "boys_li"> Boys <a style = "color: #dc3545">↓</a> </li>
                            <div class = " bg-white boys_div all_div" style = "display:none">    
                            @foreach($sub_categories_boys as $sub_category_boy)
                            <ul class = "submenu-submenu">
                            <li class = "menu-item" style = "display: block"><a style = "color:black" href="{{ route('showProducts',['type'=> 'Boys','subcategory'=> $sub_category_boy->name_of_subcategory]) }}">{{$sub_category_boy->name_of_subcategory}}</a></li>
                            </ul>
                             @endforeach
                             </div>
                            
                            <li><a class="restlink" style = "color:black" href="{{ route('contact') }}">Contact</a></li>
                            
                        </ul>
                    </nav>


        </div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a class="restlink" href="{{ route('home') }}">{{ __('Home') }}</a></li>
                            @foreach($all_categories as $single_category)
                            <li class = "{{$single_category->name_of_category}} subcategory-toggle"><a href="#">{{$single_category->name_of_category}}</a>
                             
                            @endforeach
                        
                            <li><a class="restlink" href="{{ route('faq') }}">Faq</a></li>
                            <li><a class="restlink" href="{{ route('contact') }}">Contact</a></li>
                    
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <ul class="header__right__widget">
                            <li><div class="account-icons text-center">
                            <span class="far fa-user" aria-expanded="false"></span>
                            @guest   
                            <p class="d-block header_icon_desc">Account</p>
                            @if (Route::has('register'))
                                @endif
                                    @else
                                    <p class="d-block header_icon_desc">{{ Auth::user()->name }}</p>
                            @endguest
                            </div>
                            </li>
                            <li>
                            <div class="search-icons text-center search-switch">
                            <span class="icon_search"></span>
                            <p class="d-block header_icon_desc">Search</p>
                            </div>
                            </li>
                            <li>
                            <a href="{{ route('favourites') }}">
                            <div class="heart-icons text-center">
                            <span class="icon_heart_alt"></span>
                   
                            @guest   
                            <div id="fav__count" class="tip">0</div>
                                @if (Route::has('register'))
                                @endif
                                    @else
                                        <?php
                                           $id = Auth::user()->id_ushop;

                                           $favourite_products = DB::table('favorite_products')
                                           ->where('favorite_products.id_ushop', '=', $id)
                                           ->count();
                                        ?>
                                        <div id="fav__count" class="tip">{{$favourite_products}}</div>
                            @endguest
                        
                            <p class="d-block header_icon_desc">Favourites</p>
                            </div>
                            </a> 
                            </li>
                            <li>
                            <a href="{{ route('shopcart') }}">
                            <div class="cart-icons text-center">
                            <span class="icon_cart_alt"></span>
                            <div id="cart__count" class="tip">{{ count((array) session('cart')) }}</div>
                            <p class="d-block header_icon_desc">Cart</p>
                            </div>
                            </a> 
                            </li>
                        </ul>
                        </div>
                    </div>
            </div>

                            <div class="canvas__open">
                            <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
    @include('frontend.subcategorieslist')
    
<div class = "row">
        <div class="offset-10">
            <ul class = "list-group toogle-div position-absolute col-2 border-0 float-right" style = "display:none;">
        @guest   
        <li class="list-group-item">
                <h5 class = "h5_class">Are you user?<br /></h5>
               <a class = "color_button btn btn-primary button_class" href="{{ route('login') }}">Login</a>
        </li>
               @if (Route::has('register'))
        <li class="list-group-item class2">
                <h5 class = "h5_class">Are you a new user?<br /></h5>
                <a class = "color_button btn btn-primary button_class2" href="{{ route('register') }}">Register</a>
        </li>
            @endif
                @else             
                        
                                @if (auth()->user()->id_role == 1)
                                <li class="list-group-item">
                                <h5 class = "h5_class">Shop management<br /></h5>
                                <a class = "color_button btn btn-primary button_class" href="{{ route('admin.home') }}"> {{ __('Dashboard') }}</a>
                                </li>
                                @endif  
                                @if (auth()->user()->id_role == 2)
                                <li class="list-group-item">
                                <h5 class = "h5_class">Account management<br /></h5>
                                <a class = "color_button btn btn-primary button_class" href="{{ route('user.dashboard') }}"> {{ __('Dashboard') }}</a>
                                </li>
                                @endif         
                                <li class="list-group-item class2">
                                <h5 class = "h5_class">Log off<br /></h5>
                                <a class = "color_button btn btn-primary button_class2"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                              
            @endguest
            </ul>
    </div>
</div>


    @yield('content')
    @yield('homepage')
    @yield('contact')
    @yield('shop')
    @yield('favourites')
    @yield('shopcart')
    @yield('mobileauth')

<!-- Services Section Begin-->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-car"></i>
                    <h6>Free Shipping</h6>
                    <p>For all oder over $99</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-money"></i>
                    <h6>Money Back Guarantee</h6>
                    <p>If good have Problems</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-support"></i>
                    <h6>Online Support 24/7</h6>
                    <p>Dedicated support</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                    <i class="fa fa-headphones"></i>
                    <h6>Payment Secure</h6>
                    <p>100% secure payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Section End -->

@include('frontend.instagramsec')
<!--Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="/">
                        <img src="{{ asset('img/logo.png') }}" alt="">
                     
                        </a>
                    </div>
                    <p>Shop with passion. Clothes made in Poland. <br />They are of high quality, which makes them pleasant to the touch, airy and suitable <br />for any season.</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('policy') }}">Privacy policy</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li><a href="{{ route('user.dashboard') }}">My Account</a></li>
                        <li><a href="{{ route('user.dashboard') }}">My Orders</a></li>
                        <li><a href="{{ route('shopcart') }}">Cart</a></li>
                        <li><a href="{{ route('favourites') }}">Favourites</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <div class="footer__payment">
                        <h6 class="mb-2">Payments Methods</h6>
                        <a href="#"><img src="{{ asset('img/payment/payment-1.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-2.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-3.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-4.png') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('img/payment/payment-5.png') }}" alt=""></a>
                    </div>
                    <div class="footer__social">
                        <h6 class="mb-2">Socials</h6>
                        <a href="https://www.facebook.com/Clothdiva-100631378898245"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="https://www.instagram.com/clothdiva_store/"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
               
                 <div class="footer__copyright__text">
                    <p>Copyright Clothdiva &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved</p>
                </div>
               
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->

<div class="search-model">
  <div class = "logo_searching"><img src="{{ asset('img/logo.png') }}" alt="Logo" class = img_logo_search></div>
    <div class="h-75 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" method="POST" action="{{ route('search') }}">
            @csrf
            <input type="text" id="search-input" name="search-input" placeholder="Search products..."> 
            <br/>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary bg-dark text-center border-0 col-8 mt-4">Search</button>
            </div>
        </form>
    </div>
  
</div>
<!-- Search End -->

<!-- Js Plugins -->
@yield('js-scripts')
<script src="{{ asset('js/frontend/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/frontend/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/frontend/mixitup.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/frontend/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/frontend/main.js') }}"></script>
<script src="{{ asset('js/frontend/sweetalerts.js') }}"></script>
<script src="{{ asset('js/frontend/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/frontend/checkout-form-validation.js') }}"></script>



@yield('scripts')
</body>

</html>