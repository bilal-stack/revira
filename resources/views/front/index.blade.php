@extends('front.layout.layout')
@section('content')

    <section class="section-box">
        <div class="banner-hero banner-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-2 bg-15" style="background-image: url('{{ asset('front/new/assets/imgs/page/homepage2/bg-slide.png')}}"><span class="saleoff">-25%</span><span class="font-sm text-uppercase label-green">new arrival</span>
                                            <h2 class="mt-10 color-white">Fly More Combo</h2>
                                            <h1 class="color-white lh-65">DJI Mavic Air</h1>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-7 col-sm-12">
                                                    <ul class="list-disc">
                                                        <li class="font-sm color-white">SmartCapture</li>
                                                        <li class="font-sm color-white">21-Minute Flight Time</li>
                                                        <li class="font-sm color-white">Advanced Pilot Assistance System</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000" href="{{url('shop-grid')}}">Shop now</a><a class="btn btn-link btn-link-white" href="{{url('shop-grid')}}">Learn more</a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-2 bg-15" style="background-image: url('{{ asset('front/new/assets/imgs/page/homepage2/bg-slide-2.png') }}');"><span class="saleoff">-25%</span><span class="font-sm text-uppercase label-green">Best Sale</span>
                                            <h2 class="mt-10 color-white">Omos Mobile</h2>
                                            <h1 class="color-white lh-65">KMSZ 14 2025</h1>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-7 col-sm-12">
                                                    <ul class="list-disc">
                                                        <li class="font-sm color-white">6.8" WQHD+ Edge Screen.</li>
                                                        <li class="font-sm color-white">5,000mAh (45W Charging)</li>
                                                        <li class="font-sm color-white">8GB RAM | 128GB Storage</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000" href="{{url('shop-grid')}}">Shop now</a><a class="btn btn-link btn-link-white" href="{{url('shop-grid')}}">Learn more</a></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-2 bg-15" style="background-image: url('{{ asset('front/new/assets/imgs/page/homepage2/bg-slide-2.png') }}');">
                                            <span class="saleoff">
                                            -25%</span><span class="font-sm text-uppercase label-green">Best Sale</span><span class="saleoff">-25%
                                            </span><span class="font-sm text-uppercase label-green">new arrival</span>
                                            <h2 class="mt-10 color-white">Kitchen equipment</h2>
                                            <h1 class="color-white lh-65">Trending Now</h1>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-7 col-sm-12">
                                                    <ul class="list-disc">
                                                        <li class="font-sm color-white">Free Shipping</li>
                                                        <li class="font-sm color-white">24 month support</li>
                                                        <li class="font-sm color-white">Advanced Assistance System</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-30"><a class="btn btn-brand-2 btn-gray-1000" href="{{url('shop-grid')}}">Shop now</a><a class="btn btn-link btn-link-white" href="{{url('shop-grid')}}">Learn more</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="banner-small banner-laptop bg-16 text-center"><span class="color-brand-3 font-md">New Arrivals</span>
                                    <h4 class="mb-10 color-gray-1000">Tables Collection</h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="banner-small banner-player bg-17">
                                    <h6 class="mb-10 color-gray-1000">Xbox Core Wireless Controller</h6>
                                    <p class="color-brand-1 font-sm">Aqua Shift<br> Special Edition</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="banner-small banner-apple bg-2 text-center">
                                    <h4 class="mb-0 color-gray-1000">Apple Days</h4><span class="color-brand-3 font-md">Hot devices, Latest trending</span>
                                    <div class="mt-0"><a class="btn btn-link-orange" href="{{url('shop-grid')}}">Shop Now</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="banner-small banner-samsung bg-4"><span class="color-brand-3 font-md">New Arrivals</span>
                                    <h4 class="mb-10 color-gray-1000">Samsung 2025 Led TV<span class="color-brand-3 font-md">Special sale</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-box">
        <div class="container">
            <div class="list-brands list-none-border">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/microsoft.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/sony.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/acer.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/nokia.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/assus.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/casio.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/dell.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/panasonic.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/vaio.svg')}}" alt="Revira"></a></div>
                            <div class="swiper-slide"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/slider/logo/sharp.svg')}}" alt="Revira"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-box mt-30">
        <div class="container">
            <div class="border-bottom pb-25 head-main">
                <h3>Featured Categories</h3>
                <p class="font-base">Choose your necessary products from this feature categories.</p>
                <!-- Button slider-->
                <div class="box-button-slider">
                    <div class="swiper-button-next swiper-button-next-group-2"></div>
                    <div class="swiper-button-prev swiper-button-prev-group-2"></div>
                </div>
                <!-- End Button slider-->
            </div>
            <div class="mt-10">
                <div class="box-swiper">
                    <div class="swiper-container swiper-group-style-2">
                        <div class="swiper-wrapper pt-5">
                            <div class="swiper-slide">
                                <ul class="list-9-col">
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-1.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Air Purifier</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-2.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Women Bags</a>
                                                <p class="font-xs color-gray-500">125 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-3.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Bluetooth</a>
                                                <p class="font-xs color-gray-500">625 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-4.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Electronic</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-5.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Gaming Gear</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-6.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Gaming Chair</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-7.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Home App</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-8.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Kitchen</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-9.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Mobile Gadgets</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-10.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Computers</a>
                                                <p class="font-xs color-gray-500">325 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-11.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Outdoor Camera</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-12.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Entertainment</a>
                                                <p class="font-xs color-gray-500">6536 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-13.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Sport</a>
                                                <p class="font-xs color-gray-500">2458 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-14.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Tablet</a>
                                                <p class="font-xs color-gray-500">2563 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-15.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Television</a>
                                                <p class="font-xs color-gray-500">1025 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-16.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Watches</a>
                                                <p class="font-xs color-gray-500">1254 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-17.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Drone &amp; Flycam</a>
                                                <p class="font-xs color-gray-500">2589 items</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="box-category hover-up">
                                            <div class="image"><a href="{{url('shop-grid')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-18.png')}}" alt="Revira"></a></div>
                                            <div class="text-info"><a class="font-sm color-gray-900 font-bold" href="{{url('shop-grid')}}">Video &amp; Camera</a>
                                                <p class="font-xs color-gray-500">6358 items</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box pt-50">
        <div class="container">
            <div class="head-main bd-gray-200">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <h3 class="mb-5">Flash Deals</h3>
                        <p class="font-base color-gray-500">Special products in this month.</p>
                    </div>

                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-flash-all" role="tabpanel" aria-labelledby="tab-all">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="1">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-2.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-3.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="1">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-2.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-3.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>Apple MacBook Air with Apple M1 Chip 13-inch, 8GB RAM</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 d-none d-xl-block col-sm-12">
                            <div class="grid-banner-height"><span class="lbl-new-arrival color-brand-3">New Arrivals</span>
                                <h4 class="font-24 mt-10 mb-5">Xiaomi Redmi Serial 12</h4>
                                <p class="font-16">Special Sale</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-flash-bestseller" role="tabpanel" aria-labelledby="tab-flash-bestseller">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="2">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-3.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-2.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="2">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-2.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-3.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 d-none d-xl-block col-sm-12">
                            <div class="grid-banner-height"><span class="lbl-new-arrival color-brand-3">New Arrivals</span>
                                <h4 class="font-24 mt-10 mb-5">Xiaomi Redmi Serial 12</h4>
                                <p class="font-16">Special Sale</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-flash-mostviewed" role="tabpanel" aria-labelledby="tab-flash-mostviewed">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="3">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-2.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="3">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-3.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 d-none d-xl-block col-sm-12">
                            <div class="grid-banner-height"><span class="lbl-new-arrival color-brand-3">New Arrivals</span>
                                <h4 class="font-24 mt-10 mb-5">Xiaomi Redmi Serial 12</h4>
                                <p class="font-16">Special Sale</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-flash-topbrands" role="tabpanel" aria-labelledby="tab-flash-topbrands">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="4">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen-3.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12">
                            <div class="card-grid-style-3 hover-show top-deals">
                                <div class="card-grid-inner"><span class="label"><span class="font-sm color-white">Top<br>Deals</span></span>
                                    <div class="box-top-deals">
                                        <div class="top-deals-left">
                                            <div class="image-box">
                                                <div class="box-swiper">
                                                    <div class="swiper-container swiper-tab" data-index="4">
                                                        <div class="swiper-wrapper pt-5">
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                            <div class="swiper-slide"><img src="{{asset('front/new/assets/imgs/page/homepage1/screen.png')}}" alt="Revira"></div>
                                                        </div>
                                                        <div class="swiper-pagination swiper-pagination-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box-count box-count-square">
                                                <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                            </div>
                                        </div>
                                        <div class="top-deals-right">
                                            <div class="info-right"></div><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">
                                                <h5>2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</h5></a>
                                            <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                            <div class="price-info">
                                                <h3 class="color-brand-3 price-main d-inline-block">$2856.3</h3><span class="color-gray-500 price-line">$3856.3</span>
                                            </div>
                                            <div class="box-progress">
                                                <div class="progress-bar">
                                                    <div class="progress-bar-inner"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available: </span><span class="font-xs-bold color-gray-900">568</span></div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold: </span><span class="font-xs-bold color-gray-900">289</span></div>
                                                </div>
                                            </div>
                                            <ul class="list-features">
                                                <li> 27-inch (diagonal) Retina 5K display</li>
                                                <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                                <li>AMD Radeon Pro 5300 graphics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 d-none d-xl-block col-sm-12">
                            <div class="grid-banner-height"><span class="lbl-new-arrival color-brand-3">New Arrivals</span>
                                <h4 class="font-24 mt-10 mb-5">Xiaomi Redmi Serial 12</h4>
                                <p class="font-16">Special Sale</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card-grid-style-3 hover-show hover-hide-show-cart">
                                <div class="card-grid-inner">
                                    <div class="tools"><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                    <div class="box-count">
                                        <div class="deals-countdown" data-countdown="2023/09/25 00:00:00"></div>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="#">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                        <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="box-progress box-progress-small">
                                            <div class="progress-bar">
                                                <div class="progress-bar-inner"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6"><span class="font-xs color-gray-500">Available:</span><span class="font-xs-bold color-gray-900">568</span></div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end"><span class="font-xs color-gray-500">Sold:</span><span class="font-xs-bold color-gray-900">289</span></div>
                                            </div>
                                        </div>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                        <ul class="list-features">
                                            <li> 2-day Delivery. Free shipping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box pt-70">
        <div class="container">
            <div class="head-main">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <h3 class="mb-5">Trending Products</h3>
                        <p class="font-base color-gray-500">Special products in this month.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-all" role="tabpanel" aria-labelledby="tab-all">
                    <div class="list-products-5">
                        @foreach ($discountedProducts as $product)
                            @php
                                $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                            @endphp

                            <div class="card-grid-style-3 card-grid-none-border">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a>
                                        <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>
                                    </div>
                                    <div class="image-box">
                                        <span class="label bg-brand-2">-@include('front.layout.currency') {{$product['product_discount']}}</span>
                                        <a href="{{ url('product/' . $product['id']) }}">
                                            @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                <img src="{{ asset($product_image_path) }}" alt="Product">
                                            @else {{-- show the dummy image --}}
                                                <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                                        <br>
                                        <a class="color-brand-3 font-sm-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                        <div class="rating">
                                            @php
                                                $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
                                                $fullStars = floor($avg); // e.g. 4
                                                $halfStar = ($avg - $fullStars) >= 0.5;
                                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                            @endphp

                                            {{-- Full Stars --}}
                                            @for ($i = 0; $i < $fullStars; $i++)
                                                <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                            @endfor

                                            {{-- Half Star --}}
                                            @if ($halfStar)
                                                <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                            @endif
                                            {{-- Empty Stars --}}
                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                            @endfor

                                            <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $product['ratings_count'] }} reviews</span>
                                        </div>
                                        @php
                                            $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                        @endphp
                                        <div class="price-info">
                                            @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                            <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                            <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                            @else {{-- if there's no discount on the price, show the original price --}}
                                            <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                            @endif
                                        </div>
                                        <p class="list-features">
                                            {{ $product['description'] }}
                                        </p>
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-bestseller" role="tabpanel" aria-labelledby="tab-bestseller">
                    <div class="list-products-5">
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-mostviewed" role="tabpanel" aria-labelledby="tab-mostviewed">
                    <div class="list-products-5">
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-topbrands" role="tabpanel" aria-labelledby="tab-topbrands">
                    <div class="list-products-5">
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3 card-grid-none-border">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a>
                                </div>
                                <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <ul class="list-features">
                                        <li> 27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-20">
                    <div class="bg-4 box-bdrd-4 bg-headphone"><span class="font-md color-brand-3">Headphone</span>
                        <h4 class="font-32 color-gray-1000 mb-10 mt-5">Rockez 547</h4>
                        <p class="color-brand-1 font-sm">MUSIC EVERYWHERE<br class="d-none d-lg-block">ANYTIME</p>
                        <div class="mt-35"><a class="btn btn-brand-2 btn-arrow-right" href="{{url('shop-grid')}}">Shop Now</a></div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6 mb-20">
                    <div class="bg-6 box-bdrd-4 bg-watch text-center">
                        <h4 class="font-33 color-gray-1000">LIMITED WEEKLY DEAL</h4>
                        <p class="font-18">Last call for up to<strong class="font-24 color-brand-2">$252.00</strong> OFF</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-20">
                    <div class="bg-5 box-bdrd-4 bg-ipad text-center"><span class="font-sm color-brand-3">New Arrivals</span>
                        <h4 class="font-xl color-gray-1000">Certified Deals On<br class="d-none d-lg-block"><span class="color-brand-1">Surface Pro</span> 2025</h4>
                        <div class="mt-15"><a class="btn btn-brand-2 btn-arrow-right" href="{{url('shop-grid')}}">Shop Now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="head-main">
                        <h3 class="mb-5">Top Selling Products</h3>
                        <p class="font-base color-gray-500">Special products in this month.</p>
                        <div class="box-button-slider">
                            <div class="swiper-button-next swiper-button-next-group-1"></div>
                            <div class="swiper-button-prev swiper-button-prev-group-1"></div>
                        </div>
                    </div>
                    <div class="box-swiper">
                        <div class="swiper-container swiper-group-1">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="row">
                                        @foreach ($bestSellers as $product)
                                            @php
                                                $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                            @endphp

                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="card-grid-style-2">
                                                    <div class="image-box">
                                                        <a href="{{ url('product/' . $product['id']) }}">
                                                            @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                                <img src="{{ asset($product_image_path) }}" alt="Product">
                                                            @else {{-- show the dummy image --}}
                                                                <img  src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                            @endif

                                                        </a>
                                                    </div>
                                                    <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                                                        <br>
                                                        <a class="color-brand-3 font-sm-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                        <div class="rating">
                                                            @php
                                                                $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
                                                                $fullStars = floor($avg); // e.g. 4
                                                                $halfStar = ($avg - $fullStars) >= 0.5;
                                                                $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                            @endphp

                                                            {{-- Full Stars --}}
                                                            @for ($i = 0; $i < $fullStars; $i++)
                                                                <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                                            @endfor

                                                            {{-- Half Star --}}
                                                            @if ($halfStar)
                                                                <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                            @endif
                                                            {{-- Empty Stars --}}
                                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                                <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                            @endfor

                                                            <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5, {{ $product['ratings_count'] }} reviews</span>
                                                        </div>
                                                        @php
                                                            $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                        @endphp
                                                        <div class="price-info">
                                                            @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                            @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-lg-6"><img src="{{asset('front/new/assets/imgs/page/homepage2/ads-2.png')}}" alt="Revira"></div>
                <div class="col-lg-6"><img src="{{asset('front/new/assets/imgs/page/homepage2/ads-3.png')}}" alt="Revira"></div>
            </div>
            <div class="row mt-60">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-style-2 card-grid-style-2-small">
                        <div class="image-box"><a href="{{url('shop-full-width')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/smartphone.png')}}" alt="Revira"></a>
                            <div class="mt-10 text-center"><a class="btn btn-gray" href="{{url('shop-full-width')}}">View all</a></div>
                        </div>
                        <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{url('shop-full-width')}}">
                                <h6>Smart Phone</h6></a>
                            <ul class="list-links-disc">
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Phone Accessories</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Phone Cases</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Postpaid Phones</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Refurbished Phones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-style-2 card-grid-style-2-small">
                        <div class="image-box"><a href="{{url('shop-full-width')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/television.png')}}" alt="Revira"></a>
                            <div class="mt-10 text-center"><a class="btn btn-gray" href="{{url('shop-full-width')}}">View all</a></div>
                        </div>
                        <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{url('shop-full-width')}}">
                                <h6>Television</h6></a>
                            <ul class="list-links-disc">
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">HD DVD Players</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Projection Screens</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Television Accessories</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">TV-DVD Combos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-style-2 card-grid-style-2-small">
                        <div class="image-box"><a href="{{url('shop-full-width')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/computer.png')}}" alt="Revira"></a>
                            <div class="mt-10 text-center"><a class="btn btn-gray" href="{{url('shop-full-width')}}">View all</a></div>
                        </div>
                        <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{url('shop-full-width')}}">
                                <h6>Computers</h6></a>
                            <ul class="list-links-disc">
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Computer Components</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Computer Accessories</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Desktops</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Monitors</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-style-2 card-grid-style-2-small">
                        <div class="image-box"><a href="{{url('shop-full-width')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/electric.png')}}" alt="Revira"></a>
                            <div class="mt-10 text-center"><a class="btn btn-gray" href="{{url('shop-full-width')}}">View all</a></div>
                        </div>
                        <div class="info-right"><a class="color-brand-3 font-sm-bold" href="{{url('shop-full-width')}}">
                                <h6>Electronics</h6></a>
                            <ul class="list-links-disc">
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Office Electronics</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Portable Audio &amp; Video</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Washing Machine</a></li>
                                <li><a class="font-sm" href="{{url('shop-full-width')}}">Accessories &amp; Supplies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="section-box bg-gray-50 pt-50 pb-50 mt-50">--}}
{{--        <div class="container">--}}
{{--            <div class="head-main bd-gray-200">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-xl-7 col-lg-6">--}}
{{--                        <h3 class="mb-5">Top Brands</h3>--}}
{{--                        <p class="font-base color-gray-500">Special brands in this month.</p>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-5 col-lg-6">--}}
{{--                        <ul class="nav nav-tabs text-uppercase" role="tablist">--}}
{{--                            <li><a class="active" href="#tab-2-all" data-bs-toggle="tab" role="tab" aria-controls="tab-2-all" aria-selected="true">All</a></li>--}}
{{--                            <li><a href="#tab-2-digitals" data-bs-toggle="tab" role="tab" aria-controls="tab-2-digitals" aria-selected="true">Digitals</a></li>--}}
{{--                            <li><a href="#tab-2-furniture" data-bs-toggle="tab" role="tab" aria-controls="tab-2-furniture" aria-selected="true">Furniture</a></li>--}}
{{--                            <li><a href="#tab-2-fashion" data-bs-toggle="tab" role="tab" aria-controls="tab-2-fashion" aria-selected="true">Fashion</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="tab-content">--}}
{{--                <div class="tab-pane fade active show" id="tab-2-all" role="tabpanel" aria-labelledby="tab-2-all">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-microsoft.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/microsoft.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 25% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-nokia.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/nokia.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 30% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-panasonic.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/panasonic.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-sharp.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/sharp.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 65% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-philip.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/philip.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 19% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-casio.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/casio.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 15% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-acer.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/acer.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 20% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-toshiba.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/toshiba.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 35% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="tab-2-digitals" role="tabpanel" aria-labelledby="tab-2-digitals">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-acer.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/acer.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-toshiba.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/toshiba.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-microsoft.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/microsoft.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-nokia.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/nokia.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-panasonic.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/panasonic.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-sharp.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/sharp.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-philip.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/philip.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-casio.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/casio.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="tab-2-furniture" role="tabpanel" aria-labelledby="tab-2-furniture">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-casio.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/casio.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-acer.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/acer.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-microsoft.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/microsoft.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-nokia.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/nokia.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-panasonic.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/panasonic.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-sharp.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/sharp.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-philip.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/philip.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-toshiba.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/toshiba.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="tab-2-fashion" role="tabpanel" aria-labelledby="tab-2-fashion">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-panasonic.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/panasonic.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-sharp.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/sharp.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-microsoft.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/microsoft.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-nokia.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/nokia.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-philip.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/philip.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-casio.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/casio.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-acer.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/acer.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                            <div class="card-grid-style-4">--}}
{{--                                <div class="card-grid-inner">--}}
{{--                                    <div class="image-box"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/img-toshiba.png')}}" alt="Revira"></a></div>--}}
{{--                                    <div class="info-right"><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage2/toshiba.svg')}}" alt="Revira"></a>--}}
{{--                                        <p class="font-xs color-brand-3">PC, Laptop, Smart Watch, Gaming Gear ...</p>--}}
{{--                                        <div class="divide mb-5"></div>--}}
{{--                                        <div class="font-lg-bold color-brand-3">Up to 55% off</div>--}}
{{--                                        <div class="box-link"><a class="btn btn-link-brand-2 btn-arrow-brand-2 btn-arrow-small text-lowercase pt-0 pb-0" href="{{url('shop-single-product')}}">Shop Now</a></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="section-box mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-slider-item">
                        <div class="head">
                            <h5>Best seller</h5>
                        </div>
                        <div class="content-slider">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-best-seller">
                                    <div class="swiper-wrapper pt-5">
                                        @foreach (collect($bestSellers)->chunk(3) as $chunk)
                                            <div class="swiper-slide">
                                                @foreach ($chunk as $product)
                                                    @php
                                                        $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                                    @endphp
                                                    <div class="card-grid-style-2 card-grid-none-border hover-up">
                                                        <div class="image-box">
                                                            @if ($product['product_discount'] > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                                <span class="label bg-brand-2">-@include('front.layout.currency'){{ $product['product_discount'] }}</span>
                                                            @endif


                                                            <a href="{{ url('product/' . $product['id']) }}">
                                                                @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                                    <img src="{{ asset($product_image_path) }}" alt="Product">
                                                                @else {{-- show the dummy image --}}
                                                                    <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                                                            <br>
                                                            <a class="color-brand-3 font-xs-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                            <div class="rating">
                                                                @php
                                                                    $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
                                                                    $fullStars = floor($avg); // e.g. 4
                                                                    $halfStar = ($avg - $fullStars) >= 0.5;
                                                                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                                @endphp

                                                                {{-- Full Stars --}}
                                                                @for ($i = 0; $i < $fullStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                                                @endfor

                                                                {{-- Half Star --}}
                                                                @if ($halfStar)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endif
                                                                {{-- Empty Stars --}}
                                                                @for ($i = 0; $i < $emptyStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endfor

                                                                <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $product['ratings_count'] }} reviews</span>
                                                            </div>
                                                            @php
                                                                $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                            @endphp
                                                            <div class="price-info">
                                                                @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller"></div>
                                <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-slider-item">
                        <div class="head">
                            <h5>Featured products</h5>
                        </div>
                        <div class="content-slider">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-featured">
                                    <div class="swiper-wrapper pt-5">
                                        @foreach (collect($featuredProducts)->chunk(3) as $chunk)
                                            <div class="swiper-slide">
                                                @foreach ($chunk as $product)
                                                    @php
                                                        $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                                    @endphp
                                                    <div class="card-grid-style-2 card-grid-none-border hover-up">
                                                        <div class="image-box">
                                                            @if ($product['product_discount'] > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                            <span class="label bg-brand-2">-@include('front.layout.currency'){{ $product['product_discount'] }}</span>
                                                            @endif


                                                            <a href="{{ url('product/' . $product['id']) }}">
                                                                @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                                <img src="{{ asset($product_image_path) }}" alt="Product">
                                                                @else {{-- show the dummy image --}}
                                                                <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                                                            <br>
                                                            <a class="color-brand-3 font-xs-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                            <div class="rating">
                                                                @php
                                                                    $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
                                                                    $fullStars = floor($avg); // e.g. 4
                                                                    $halfStar = ($avg - $fullStars) >= 0.5;
                                                                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                                @endphp

                                                                {{-- Full Stars --}}
                                                                @for ($i = 0; $i < $fullStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                                                @endfor

                                                                {{-- Half Star --}}
                                                                @if ($halfStar)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endif
                                                                {{-- Empty Stars --}}
                                                                @for ($i = 0; $i < $emptyStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endfor

                                                                <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $product['ratings_count'] }} reviews</span>
                                                            </div>
                                                            @php
                                                                $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                            @endphp
                                                            <div class="price-info">
                                                                @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-featured"></div>
                                <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-featured"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-slider-item">
                        <div class="head">
                            <h5>Most viewed</h5>
                        </div>
                        <div class="content-slider">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-mostviewed">
                                    <div class="swiper-wrapper pt-5">
                                        @foreach (collect($mostViewedProducts)->chunk(3) as $chunk)
                                            <div class="swiper-slide">
                                                @foreach ($chunk as $product)
                                                    @php
                                                        $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                                    @endphp
                                                    <div class="card-grid-style-2 card-grid-none-border hover-up">
                                                        <div class="image-box">
                                                            @if ($product['product_discount'] > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                            <span class="label bg-brand-2">-@include('front.layout.currency'){{ $product['product_discount'] }}</span>
                                                            @endif


                                                            <a href="{{ url('product/' . $product['id']) }}">
                                                                @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                                <img src="{{ asset($product_image_path) }}" alt="Product">
                                                                @else {{-- show the dummy image --}}
                                                                <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                                                            <br>
                                                            <a class="color-brand-3 font-xs-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                            <div class="rating">
                                                                @php
                                                                    $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
                                                                    $fullStars = floor($avg); // e.g. 4
                                                                    $halfStar = ($avg - $fullStars) >= 0.5;
                                                                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                                @endphp

                                                                {{-- Full Stars --}}
                                                                @for ($i = 0; $i < $fullStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                                                @endfor

                                                                {{-- Half Star --}}
                                                                @if ($halfStar)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endif
                                                                {{-- Empty Stars --}}
                                                                @for ($i = 0; $i < $emptyStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endfor

                                                                <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $product['ratings_count'] }} reviews</span>
                                                            </div>
                                                            @php
                                                                $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                            @endphp
                                                            <div class="price-info">
                                                                @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-mostviewed"></div>
                                <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-mostviewed"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="box-slider-item">
                        <div class="head">
                            <h5>Discounted</h5>
                        </div>
                        <div class="content-slider">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-trending">
                                    <div class="swiper-wrapper pt-5">
                                        @foreach (collect($discountedProducts)->chunk(3) as $chunk)
                                            <div class="swiper-slide">
                                                @foreach ($chunk as $product)
                                                    @php
                                                        $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                                    @endphp
                                                    <div class="card-grid-style-2 card-grid-none-border hover-up">
                                                        <div class="image-box">
                                                            @if ($product['product_discount'] > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                                            <span class="label bg-brand-2">-@include('front.layout.currency'){{ $product['product_discount'] }}</span>
                                                            @endif


                                                            <a href="{{ url('product/' . $product['id']) }}">
                                                                @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                                <img src="{{ asset($product_image_path) }}" alt="Product">
                                                                @else {{-- show the dummy image --}}
                                                                <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                                @endif
                                                            </a>
                                                        </div>
                                                        <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                                                            <br>
                                                            <a class="color-brand-3 font-xs-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                                                            <div class="rating">
                                                                @php
                                                                    $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
                                                                    $fullStars = floor($avg); // e.g. 4
                                                                    $halfStar = ($avg - $fullStars) >= 0.5;
                                                                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                                @endphp

                                                                {{-- Full Stars --}}
                                                                @for ($i = 0; $i < $fullStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                                                @endfor

                                                                {{-- Half Star --}}
                                                                @if ($halfStar)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endif
                                                                {{-- Empty Stars --}}
                                                                @for ($i = 0; $i < $emptyStars; $i++)
                                                                    <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                                @endfor

                                                                <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $product['ratings_count'] }} reviews</span>
                                                            </div>
                                                            @php
                                                                $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                                                            @endphp
                                                            <div class="price-info">
                                                                @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-trending"></div>
                                <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-trending"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box mt-50">
        <div class="container">
            <div class="text-center mt-30"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/banner-ads.png')}}" alt="Revira"></a></div>
        </div>
    </section>

{{--    <section class="section-box mt-50">--}}
{{--        <div class="container">--}}
{{--            <div class="head-main">--}}
{{--                <h3 class="mb-5">Latest News &amp; Events</h3>--}}
{{--                <p class="font-base color-gray-500">From our blog, forum</p>--}}
{{--                <div class="box-button-slider">--}}
{{--                    <div class="swiper-button-next swiper-button-next-group-4"></div>--}}
{{--                    <div class="swiper-button-prev swiper-button-prev-group-4"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="container mt-10">--}}
{{--            <div class="box-swiper">--}}
{{--                <div class="swiper-container swiper-group-4">--}}
{{--                    <div class="swiper-wrapper pt-5">--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card-grid-style-1">--}}
{{--                                <div class="image-box"><a href="blog-single-2.php"></a><img src="{{asset('front/new/assets/imgs/page/blog/blog-1.jpg')}}" alt="Revira"></div><a class="tag-dot font-xs" href="blog-list.php">Technology</a><a class="color-gray-1100" href="blog-single-2.php">--}}
{{--                                    <h4>The latest technologies to be used for VR in 2025</h4></a>--}}
{{--                                <div class="mt-20"><span class="color-gray-500 font-xs mr-30">September 02, 2025</span><span class="color-gray-500 font-xs">4<span> Mins read</span></span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card-grid-style-1">--}}
{{--                                <div class="image-box"><a href="blog-single.php"></a><img src="{{asset('front/new/assets/imgs/page/blog/blog-2.jpg')}}" alt="Revira"></div><a class="tag-dot font-xs" href="blog-list.php">Technology</a><a class="color-gray-1100" href="blog-single.php">--}}
{{--                                    <h4>How can Web 3.0 Bring Changes to the Gaming?</h4></a>--}}
{{--                                <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 30, 2025</span><span class="color-gray-500 font-xs">5<span> Mins read</span></span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card-grid-style-1">--}}
{{--                                <div class="image-box"><a href="blog-single-3.php"></a><img src="{{asset('front/new/assets/imgs/page/blog/blog-3.jpg')}}" alt="Revira"></div><a class="tag-dot font-xs" href="blog-list.php">Gaming</a><a class="color-gray-1100" href="blog-single-3.php">--}}
{{--                                    <h4>NFT Blockchain Games That Might Take Off</h4></a>--}}
{{--                                <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 25, 2025</span><span class="color-gray-500 font-xs">3<span> Mins read</span></span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card-grid-style-1">--}}
{{--                                <div class="image-box"><a href="blog-single-2.php"></a><img src="{{asset('front/new/assets/imgs/page/blog/blog-4.jpg')}}" alt="Revira"></div><a class="tag-dot font-xs" href="blog-list.php">Blockchain</a><a class="color-gray-1100" href="blog-single-2.php">--}}
{{--                                    <h4>Blockchain Gaming And Its Three Challenges</h4></a>--}}
{{--                                <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 15, 2025</span><span class="color-gray-500 font-xs">7<span> Mins read</span></span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="swiper-slide">--}}
{{--                            <div class="card-grid-style-1">--}}
{{--                                <div class="image-box"><a href="blog-single-2.php"></a><img src="{{asset('front/new/assets/imgs/page/blog/blog-5.jpg')}}" alt="Revira"></div><a class="tag-dot font-xs" href="blog-list.php">Development</a><a class="color-gray-1100" href="blog-single-2.php">--}}
{{--                                    <h4>HTML5 – The Future of Mobile App Development</h4></a>--}}
{{--                                <div class="mt-20"><span class="color-gray-500 font-xs mr-30">August 12, 2025</span><span class="color-gray-500 font-xs">9<span> Mins read</span></span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
