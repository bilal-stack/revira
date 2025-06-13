@extends('front.layout.layout')
@section('content')

    <section class="section-box">
        <div class="banner-hero banner-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-2 bg-15" style="background-image: url('{{ asset('front/new/assets/imgs/ban1.png')}}">
{{--                                            <span class="saleoff">-25%</span>--}}
                                            <span class="font-sm text-uppercase label-green">new arrival</span>
                                            <h2 class="mt-10 color-white">Your One-Stop Shop <br>for Vintage Wholesale!</h2>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-7 col-sm-12 mt-2">
                                                    <p class="font-sm color-white">Explore a vast selection of high-quality secondhand clothing at wholesale prices. We connect you with trusted suppliers worldwide, making it easy to stock up your store with high-quality vintage wholesale.</p>
                                                </div>
                                            </div>
                                            <div class="mt-30">
                                                <a class="btn btn-brand-2 btn-gray-1000" href="{{url('shop')}}">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-2 bg-15" style="background-image: url('{{ asset('front/new/assets/imgs/ban2.png') }}');">
{{--                                            <span class="saleoff">-25%</span>--}}
                                            <span class="font-sm text-uppercase label-green">Best Sale</span>
                                            <h2 class="mt-10 color-white">Connect instantly with chat</h2>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-7 col-sm-12 mt-2">
                                                    <p class="font-sm color-white">Use chat to connect directly with suppliers, get quick responses, and make real-time product selections, ensuring you choose the best secondhand and vintage stock for your store.</p>
                                                </div>
                                            </div>
                                            <div class="mt-30">
                                                <a class="btn btn-brand-2 btn-gray-1000" href="{{url('shop')}}">Shop now</a>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-2 bg-15" style="background-image: url('{{ asset('front/new/assets/imgs/ban3.png') }}');">
                                            <h2 class="mt-10 color-white">WEAR YOUR STORY</h2>
                                            <div class="row">
                                                <div class="col-lg-5 col-md-7 col-sm-12 mt-2">
                                                    <p class="font-sm color-white">Use chat to connect directly with suppliers, get quick responses, and make real-time product selections, ensuring you choose the best secondhand and vintage stock for your store.</p>
                                                </div>
                                            </div>
                                            <div class="mt-30">
                                                <a class="btn btn-brand-2 btn-gray-1000" href="{{url('shop')}}">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-1"></div>
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
                                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist/'. $product['id'])}}" aria-label="Add To Wishlist"></a>
{{--                                        <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                    </div>
                                    <div class="image-box">
                                        <span class="label bg-brand-2">-% {{$product['product_discount']}}</span>
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
{{--                                        <p class="list-features">--}}
{{--                                            {{ $product['description'] }}--}}
{{--                                        </p>--}}
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{ url('product/' . $product['id']) }}">Add To Cart</a></div>
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
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a>
{{--                                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
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
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a>
{{--                                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
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
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a>
{{--                                    <a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a>--}}
{{--                                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
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
    <section class="section-box pt-70">
        <div class="container">
            <div class="head-main">
                <div class="row">
                    <div class="col-xl-5 col-lg-5">
                        <h3 class="mb-5">Featured Products</h3>
                        <p class="font-base color-gray-500">Special products in this month.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-all" role="tabpanel" aria-labelledby="tab-all">
                    <div class="list-products-5">
                        @foreach ($featuredProducts as $product)
                            @php
                                $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                            @endphp

                            <div class="card-grid-style-3 card-grid-none-border">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist/'. $product['id'])}}" aria-label="Add To Wishlist"></a>
                                        {{--                                        <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                    </div>
                                    <div class="image-box">
                                        <span class="label bg-brand-2">-% {{$product['product_discount']}}</span>
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
{{--                                        <p class="list-features">--}}
{{--                                            {{ \Illuminate\Support\Str::words($product['description'], 5, '...') }}--}}
{{--                                        </p>--}}
                                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{ url('product/' . $product['id']) }}">Add To Cart</a></div>
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
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a>
                                    {{--                                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
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
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a>
                                    {{--                                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
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
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a>
                                    {{--                                    <a class="btn btn-compare btn-tooltip mb-10" href="{{url('shop-compare')}}" aria-label="Compare"></a>--}}
                                    {{--                                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
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
                                                            <span class="label bg-brand-2">-%{{ $product['product_discount'] }}</span>
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

                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
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
                                                            <span class="label bg-brand-2">-%{{ $product['product_discount'] }}</span>
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

                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
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
                                                            <span class="label bg-brand-2">-%{{ $product['product_discount'] }}</span>
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

                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
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
                                                            <span class="label bg-brand-2">-%{{ $product['product_discount'] }}</span>
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

                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                                                <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $product['product_price'] }}</span>

                                                                @else {{-- if there's no discount on the price, show the original price --}}
                                                                <strong class="font-sm-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
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
        </div>
    </section>


    <section class="section-box mt-30">
        <div class="container">
            <div class="border-bottom pb-25 head-main">
                <h3>Popular Brands</h3>
                <p class="font-base theme-color">Choose your necessary products from this popular brands.</p>
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
                                    @foreach($brands as $brand)
                                        <li>
                                            <div class="box-category hover-up">
                                                <div class="text-info">
                                                    <a class="font-lg-bold color-gray-900 font-bold" href="{{url('shop')}}">{{$brand->name}}</a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
