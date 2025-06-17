@extends('front.layout.layout')
@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-sm color-gray-1000" href="{{url('/')}}">Home</a></li>
                    <li><a class="font-sm color-gray-500" href="#">Vendors</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section-box shop-template mt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30">
                    <h3>Vendors</h3>
{{--                    <p class="font-md color-gray-500">We have<span class="font-md-bold color-brand-3"> 780</span><span>--}}
{{--                            vendors now</span></p>--}}
                </div>
                <div class="col-lg-6 mb-30 text-end">
{{--                    <a class="font-sm color-gray-900 mr-30" href="#">Support--}}
{{--                        Ticket</a>--}}
{{--                    <a class="font-sm color-gray-900 mr-30" href="#">BRevirae an Affilate</a>--}}
                    <a class="btn btn-buy w-auto font-sm-bold" href="{{ url('vendor/login-register') }}">Open a Shop</a></div>
            </div>
            <div class="border-bottom pt-0 mb-30"></div>
            <div class="row">
                <div class="col-lg-12 order-first order-lg-last">

                    <div class="row">
                        @foreach ($vendors as $vendor)
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="card-vendor">
                                            <div class="card-top-vendor">
                                                <div class="card-top-vendor-left">
                                                   <a href="{{url($vendor->vendorbusinessdetails->shop_name. '/products')}}">
                                                       @if(!empty($vendor->vendorbusinessdetails->shop_image))
                                                           <img src="{{ url('admin/images/photos/' . $vendor->vendorbusinessdetails->shop_image) }}" alt="{{ $vendor->vendorbusinessdetails->shop_name }}">
                                                       @else
                                                           <img src="{{asset('front/images/store-default.png')}}" alt="{{ $vendor->vendorbusinessdetails->shop_name }}">
                                                       @endif
                                                   </a>
                                                </div>
                                                <div class="card-top-vendor-right">
                                                    <a href="{{url($vendor->vendorbusinessdetails->shop_name. '/products')}}">
                                                        <p class="font-lg-bold color-gray-500" style="color: #000000ad">{{ $vendor->vendorbusinessdetails->shop_name }}</p>
                                                    </a>

                                                    <p class="font-sm color-gray-500 mt-10">Member since {{ \Carbon\Carbon::parse($vendor->created_at)->format('F Y') }}</p>
                                                    <a class="btn btn-gray mt-2" href="{{url($vendor->vendorbusinessdetails->shop_name. '/products')}}">View Products</a>
                                                </div>
                                            </div>
                                            <div class="card-bottom-vendor">
                                                <p class="fontlg color-gray-500 location mb-10">{{ $vendor->vendorbusinessdetails->shop_country }} </p>

                                                <p class="font-lg color-gray-500 phone">
                                                    <a class="btn btn-gray" href="{{url('chat/'. $vendor->username)}}">Message</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                                        <div class="box-swiper">
                                            <div class="swiper-container swiper-vendor-list">
                                                <div class="swiper-wrapper mb-15">
                                                    @foreach ($vendor->limitedProducts as $product)
                                                        <div class="swiper-slide">

                                                                @php
                                                                    $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                                                @endphp
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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

                                                                                <strong class="font-md-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                                <strong class="font-md-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <nav>
                        {{$vendors->links()}}
                    </nav>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        var swiper = new Swiper(".swiper-vendor-list", {
            slidesPerView: 3,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
@endsection
