<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



   
    <!-- Fontawesome -->
    <link type="text/css" href="/frontend/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    
    <!-- Prism -->
    <link type="text/css" href="/frontend/vendor/prismjs/themes/prism.css" rel="stylesheet">

    <!-- Front CSS -->
    <link type="text/css" href="/frontend/css/front.css" rel="stylesheet">
    <!-- Owl CSS -->
    <link type="text/css" href="/frontend/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="/frontend/css/custom.css" rel="stylesheet">
    <!-- Star CSS -->
    <link type="text/css" href="/frontend/css/star-rating-svg.css" rel="stylesheet">
    
    <!-- datatable CSS -->
    <link type="text/css" href="/frontend/css/DataTables/css/jquery.dataTables.min.css" rel="stylesheet">
   
    @yield('css')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="" href="{{ url('/') }}">
                <!-- spushowalem -->
                  <!-- <a class="navbar-brand h1" href="{{ url('/') }}">
                      {{ config('app.name', 'Laravel') }}-->
                   <img src="{{url('/images/logo.jpg')}}" alt="logo"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
     
            <!-- preloader -->
            <div class="preloader bg-soft flex-column justify-content-center align-items-center">
                <div class="loader-element">
                    <span class="loader-animated-dot"></span>
                    <h1>{{ config('app.name', 'Laravel') }}</h1>
                
                </div>
            </div>

            @yield('content')

            <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 footer-bg text-white bg-primary overflow-hidden">
            <div class="pattern pattern-soft top"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <a class="footer-brand mr-lg-5 d-flex" href="/">
                            <h2>{{ config('app.name', 'Laravel') }}</h2>
                        </a>
                        <!--<p class="my-4">{{ config('app.name', 'Laravel') }}</p>-->
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h4>Navigation</h4>
                        <ul class="links-vertical">
                        <li><a href="/">Home</a></li>
                            <li><a  href="/about">About</a></li>
                            <li><a  href="/why-us">Why us</a></li>
                            <li><a  href="/faq">FAQ</a></li>
                            <li><a  href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h4>Useful Pages</h4>
                        <ul class="links-vertical">
           
                        </ul>
                    </div>
                    <div class="col-12 col-sm-3 col-lg-2">
                        <h4>Social</h4>
                        <ul class="links-vertical">
                            <li><a  href="" target="_blank">Facebook</a></li>
                            <li><a  href="" target="_blank">Twitter</a></li>
                            <li><a  href="" target="_blank">LinkedIn</a></li>
                            <li><a  href="" target="_blank">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="my-4 my-lg-5">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                        <p class="font-weight-normal mb-0">© {{ config('app.name', 'Laravel') }} <script>document.write(new Date().getFullYear())</script> <span class="current-year"></span>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        </main>
    </div>
    @yield('javascript')
     <!-- Core -->
     <script src="/frontend/vendor/jquery/dist/jquery.min.js"></script>
    <!-- Datatables JS -->
    <script src="/frontend/assets/js/datatables.min.js"></script>
    
    <script src="/frontend/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="/frontend/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/frontend/vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="/frontend/vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="/frontend/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="/frontend/vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="/frontend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Button Js -->
    <script async defer src="/frontend/assets/js/button.js"></script>

    <!-- Impact JS -->
    <script src="/frontend/assets/js/front.js"></script>
    <!-- Star JS -->
    <script src="/frontend/assets/js/jquery.star-rating-svg.js"></script>
    <!-- Owl JS -->
    <script src="/frontend/assets/js/owl.carousel.min.js"></script>
    <!-- Select2 JS -->
    <script src="/frontend/assets/js/select2.min.js"></script>
    <!-- Custom JS -->
    <script src="/frontend/assets/js/custom.js"></script>
    



</body>
</html>
