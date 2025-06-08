<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="template-color" content="#FD9636">
    {{-- Static And Dynamic SEO (HTML meta tags): Check the HTML <meta> tags and <title> tag in front/layout/layout.blade.php. Check index() method in Front/IndexController.php, listing() method in Front/ProductsController.php, detail() method in Front/ProductsController.php and cart() method in Front/ProductsController.php     --}}

    <meta name="author" content="Bilal - Whatsapp: +923323735667">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/new/assets/imgs/template/favicon.svg')}}">
    <link href="{{asset('front/new/assets/css/style.css?v=3.0.0')}}" rel="stylesheet">
    <title>
        Home - Revira
    </title>
    <style>
        body > .skiptranslate {
            display: none;
        }
        body {
            top: 0px !important;
        }
    </style>
</head>

    <body>
{{--
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="text-center"><img class="mb-10" src="{{asset('front/new/assets/imgs/template/favicon.svg')}}" alt="Revira">
                        <div class="preloader-dots"></div>
                    </div>
                </div>
            </div>
        </div> --}}

        @include('front.layout.header')


        {{-- Middle Content (varies from a page to another) --}}
        <main class="main">
            @yield('content')

            {{-- Footer partial --}}
            @include('front.layout.footer')

            {{-- Modal Popup partial --}}
            @include('front.layout.modals')
        </main>




        <!-- app /- -->
        <!--[if lte IE 9]>
        <div class="app-issue">
            <div class="vertical-center">
                <div class="text-center">
                    <h1>You are using an outdated browser.</h1>
                    <span>This web app is not compatible with following browser. Please upgrade your browser to improve your security and experience.</span>
                </div>
            </div>
        </div>
        <style> #app {
            display: none;
            }
        </style>
        <![endif]-->
        <!-- NoScript -->
        <noscript>
            <div class="app-issue">
                <div class="vertical-center">
                    <div class="text-center">
                        <h1>JavaScript is disabled in your browser.</h1>
                        <span>Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                    </div>
                </div>
            </div>
            <style>
                #app {
                display: none;
                }
            </style>
        </noscript>
        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>

        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script src="{{asset('front/new/assets/js/vendors/modernizr-3.6.0.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/jquery-migrate-3.3.0.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/waypoints.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/wow.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/magnific-popup.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/perfect-scrollbar.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/select2.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/isotope.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/scrollup.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/noUISlider.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/slider.js')}}"></script>
        <!-- Count down-->
        <script src="{{asset('front/new/assets/js/vendors/counterup.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/jquery.countdown.min.js')}}"></script>
        <!-- Count down--><script src="{{asset('front/new/assets/js/vendors/jquery.elevatezoom.js')}}"></script>
        <script src="{{asset('front/new/assets/js/vendors/slick.js')}}"></script>
        <script src="{{asset('front/new/assets/js/main.js?v=3.0.0')}}"></script>
        <script src="{{asset('front/new/assets/js/shop.js?v=1.2.1')}}"></script>

        <script type="text/javascript" src="{{ url('front/new/js/custom.js') }}"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        {{-- To enable us to write PHP code within JavaScript code (to operate the Dynamic Filters dynamically (the second way)) --}}
{{--        @include('front.layout.scripts') --}}{{-- scripts.blade.php --}}

    </body>
</html>
