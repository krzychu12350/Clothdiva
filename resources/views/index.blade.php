<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
            
        <div class="site-wrap">
            

            <div class="site-navbar bg-white py-2">

            <div class="search-wrap">
                <div class="container">
                <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
                </form>  
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                <div class="logo">
                    <div class="site-logo">
                    <a href="index.html" class="js-logo-clone">ShopMax</a>
                    </div>
                </div>
                <div class="main-nav d-none d-lg-block">
                    <nav class="site-navigation text-right text-md-center" role="navigation">
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="has-children active">
                        <a href="index.html">Home</a>
                        <ul class="dropdown">
                            <li><a href="#">Menu One</a></li>
                            <li><a href="#">Menu Two</a></li>
                            <li><a href="#">Menu Three</a></li>
                            <li class="has-children">
                            <a href="#">Sub Menu</a>
                            <ul class="dropdown">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                            </ul>
                            </li>
                        </ul>
                        </li>
                        
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="#">Catalogue</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    </nav>
                </div>
                <div class="icons">
                    <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                    <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
                    <a href="cart.html" class="icons-btn d-inline-block bag">
                    <span class="icon-shopping-bag"></span>
                    <span class="number">2</span>
                    </a>
                    <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
                </div>
                </div>
            </div>
            </div>

            <div class="site-blocks-cover" data-aos="fade">
            <div class="container">
                <div class="row">
                <div class="col-md-6 ml-auto order-md-2 align-self-start">
                    <div class="site-block-cover-content">
                    <h2 class="sub-title">#New Summer Collection 2019</h2>
                    <h1>Arrivals Sales</h1>
                    <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                    </div>
                </div>
                <div class="col-md-6 order-1 align-self-end">
                    <img src="images/model_3.png" alt="Image" class="img-fluid">
                </div>
                </div>
            </div>
            </div>

            <div class="site-section">
            <div class="container">
                <div class="title-section mb-5">
                <h2 class="text-uppercase"><span class="d-block">Discover</span> The Collections</h2>
                </div>
                <div class="row align-items-stretch">
                <div class="col-lg-8">
                    <div class="product-item sm-height full-height bg-gray">
                    <a href="#" class="product-category">Women <span>25 items</span></a>
                    <img src="{{ asset('/images/model_4.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-item sm-height bg-gray mb-4">
                    <a href="#" class="product-category">Men <span>25 items</span></a>
                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                    </div>

                    <div class="product-item sm-height bg-gray">
                    <a href="#" class="product-category">Shoes <span>25 items</span></a>
                    <img src="images/model_6.png" alt="Image" class="img-fluid">
                    </div>
                </div>
                </div>
            </div>
            </div>


            
            <div class="site-section">
            <div class="container">
                <div class="row">
                <div class="title-section mb-5 col-12">
                    <h2 class="text-uppercase">Popular Products</h2>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_2.png" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Gray Shoe</a></h2>
                    <strong class="item-price">$20.00</strong>
                </div>
                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_3.png" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                    <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>

                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_5.png" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                    <strong class="item-price"><del>$46.00</del> $28.00</strong>

                    <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/prod_1.png" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                    <strong class="item-price"><del>$46.00</del> $28.00</strong>
                    <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_1.png" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                    <strong class="item-price"><del>$46.00</del> $28.00</strong>
                </div>
                <div class="col-lg-4 col-md-6 item-entry mb-4">
                    <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/model_7.png" alt="Image" class="img-fluid">
                    </a>
                    <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                    <strong class="item-price">$58.00</strong>
                </div>

                </div>
            </div>
            </div>

            <div class="site-section">
            <div class="container">
                <div class="row">
                <div class="title-section text-center mb-5 col-12">
                    <h2 class="text-uppercase">Most Rated</h2>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12 block-3">
                    <div class="nonloop-block-3 owl-carousel">
                    <div class="item">
                        <div class="item-entry">
                        <a href="#" class="product-item md-height bg-gray d-block">
                            <img src="images/model_1.png" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="item-title"><a href="#">Smooth Cloth</a></h2>
                        <strong class="item-price"><del>$46.00</del> $28.00</strong>
                        <div class="star-rating">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                        <a href="#" class="product-item md-height bg-gray d-block">
                            <img src="images/prod_3.png" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="item-title"><a href="#">Blue Shoe High Heels</a></h2>
                        <strong class="item-price"><del>$46.00</del> $28.00</strong>

                        <div class="star-rating">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                        <a href="#" class="product-item md-height bg-gray d-block">
                            <img src="images/model_5.png" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="item-title"><a href="#">Denim Jacket</a></h2>
                        <strong class="item-price"><del>$46.00</del> $28.00</strong>

                        <div class="star-rating">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                        <a href="#" class="product-item md-height bg-gray d-block">
                            <img src="images/prod_1.png" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="item-title"><a href="#">Leather Green Bag</a></h2>
                        <strong class="item-price"><del>$46.00</del> $28.00</strong>
                        <div class="star-rating">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-entry">
                        <a href="#" class="product-item md-height bg-gray d-block">
                            <img src="images/model_7.png" alt="Image" class="img-fluid">
                        </a>
                        <h2 class="item-title"><a href="#">Yellow Jacket</a></h2>
                        <strong class="item-price">$58.00</strong>
                        <div class="star-rating">
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                            <span class="icon-star2 text-warning"></span>
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
                </div>
            </div>
            </div>


            <div class="site-blocks-cover inner-page py-5" data-aos="fade">
            <div class="container">
                <div class="row">
                <div class="col-md-6 ml-auto order-md-2 align-self-start">
                    <div class="site-block-cover-content">
                    <h2 class="sub-title">#New Summer Collection 2019</h2>
                    <h1>New Shoes</h1>
                    <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
                    </div>
                </div>
                <div class="col-md-6 order-1 align-self-end">
                    <img src="images/model_6.png" alt="Image" class="img-fluid">
                </div>
                </div>
            </div>
            </div>

            <footer class="site-footer custom-border-top">
            <div class="container">
                <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                    <h3 class="footer-heading mb-4">Promo</h3>
                    <a href="#" class="block-6">
                    <img src="images/about_1.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
                    <h3 class="font-weight-light  mb-0">Finding Your Perfect Shirts This Summer</h3>
                    <p>Promo from  July 15 &mdash; 25, 2019</p>
                    </a>
                </div>
                <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
                    <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Quick Links</h3>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                        <li><a href="#">Sell online</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Shopping cart</a></li>
                        <li><a href="#">Store builder</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                        <li><a href="#">Mobile commerce</a></li>
                        <li><a href="#">Dropshipping</a></li>
                        <li><a href="#">Website development</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <ul class="list-unstyled">
                        <li><a href="#">Point of sale</a></li>
                        <li><a href="#">Hardware</a></li>
                        <li><a href="#">Software</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                    <h3 class="footer-heading mb-4">Contact Info</h3>
                    <ul class="list-unstyled">
                        <li class="address">203 Fake St. Mountain View, San Francisco, California, USA</li>
                        <li class="phone"><a href="tel://23923929210">+2 392 3929 210</a></li>
                        <li class="email">emailaddress@domain.com</li>
                    </ul>
                    </div>

                    <div class="block-7">
                    <form action="#" method="post">
                        <label for="email_subscribe" class="footer-heading">Subscribe</label>
                        <div class="form-group">
                        <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                        <input type="submit" class="btn btn-sm btn-primary" value="Send">
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                
                </div>
            </div>
            </footer>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/aos.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
