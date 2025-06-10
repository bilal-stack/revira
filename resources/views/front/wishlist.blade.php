    @extends('front.layout.layout')
    @section('content')
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
                        <li><a class="font-xs color-gray-500" href="{{url('shop')}}">Shop</a></li>
                        <li><a class="font-xs color-gray-500" href="{{url('wishlist')}}">Wishlist</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="box-wishlist">
                    <div class="head-wishlist">
                        <div class="item-wishlist">
{{--                            <div class="wishlist-cb">--}}
{{--                                <input class="cb-layout cb-all" type="checkbox">--}}
{{--                            </div>--}}
                            <div class="wishlist-product"><span class="font-md-bold color-brand-3">Product</span></div>
                            <div class="wishlist-price"><span class="font-md-bold color-brand-3">Price</span></div>
                            <div class="wishlist-action"><span class="font-md-bold color-brand-3">Action</span></div>
                            <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Remove</span></div>
                        </div>
                    </div>
                    <div class="content-wishlist">
                        @foreach($wishlists as $wishlist)
                            @php
                                $product_image_path = 'front/images/product_images/small/' . $wishlist->item->product_image;
                            @endphp
                            <div class="item-wishlist">
                                {{--                            <div class="wishlist-cb">--}}
                                {{--                                <input class="cb-layout cb-select" type="checkbox">--}}
                                {{--                            </div>--}}
                                <div class="wishlist-product">
                                    <div class="product-wishlist">
                                        <div class="product-image">
                                            <a href="{{ url('product/' . $wishlist->item->id) }}">
                                                @if (!empty($wishlist->item->product_image) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                    <img src="{{ asset($product_image_path) }}" alt="Product">
                                                @else {{-- show the dummy image --}}
                                                    <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="product-info"><a href="{{url('wishlist/'. $wishlist->item->id)}}">
                                                <h6 class="color-brand-3">{{ $wishlist->item->product_name }}</h6>
                                            </a>
                                            <div class="rating">
                                                @php
                                                    $avg = round($wishlist->item->ratings_avg_rating, 1); // average like 4.2
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

                                                <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $wishlist->item->ratings_count }} reviews</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wishlist-price">
                                    @php
                                        $getDiscountPrice = \App\Models\Product::getDiscountPrice($wishlist->item->id);
                                    @endphp
                                    @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}

                                    <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                    <span class="color-gray-500 price-line">@include('front.layout.currency'){{ $wishlist->item->product_price }}</span>

                                    @else {{-- if there's no discount on the price, show the original price --}}
                                    <strong class="font-lg-bold color-brand-3 price-main">@include('front.layout.currency'){{ $getDiscountPrice }}</strong>
                                    @endif
                                </div>
                                <div class="wishlist-action">
                                    <a class="btn btn-cart font-sm-bold" href="{{ url('product/' . $wishlist->item->id) }}">Add to Cart</a>
                                </div>
                                <div class="wishlist-remove"><a class="btn btn-delete" href="{{url('wishlist/remove/'. $wishlist->id)}}"></a></div>
                            </div>
                        @endforeach

                    </div>
                </div>
{{--                <h4 class="color-brand-3">You may also like</h4>--}}
{{--                <div class="list-products-5 mt-20 mb-40">--}}
{{--                    <div class="card-grid-style-3">--}}
{{--                        <div class="card-grid-inner">--}}
{{--                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"--}}
{{--                                    aria-label="Trend" data-bs-placement="left"></a><a--}}
{{--                                    class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"--}}
{{--                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"--}}
{{--                                    href="{{url('compare')}}" aria-label="Compare"></a><a--}}
{{--                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"--}}
{{--                                    data-bs-toggle="modal"></a></div>--}}
{{--                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a--}}
{{--                                    href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}"--}}
{{--                                        alt="Revira"></a></div>--}}
{{--                            <div class="info-right"><a class="font-xs color-gray-500"--}}
{{--                                    href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"--}}
{{--                                    href="{{url('shop-single-product')}}">Razer Power Up Gaming Bundle V2 - Cynosa Lite</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500">(65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To--}}
{{--                                        Cart</a></div>--}}
{{--                                <ul class="list-features">--}}
{{--                                    <li>27-inch (diagonal) Retina 5K display</li>--}}
{{--                                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>--}}
{{--                                    <li>AMD Radeon Pro 5300 graphics</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-grid-style-3">--}}
{{--                        <div class="card-grid-inner">--}}
{{--                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"--}}
{{--                                    aria-label="Trend" data-bs-placement="left"></a><a--}}
{{--                                    class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"--}}
{{--                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"--}}
{{--                                    href="{{url('compare')}}" aria-label="Compare"></a><a--}}
{{--                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"--}}
{{--                                    data-bs-toggle="modal"></a></div>--}}
{{--                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a--}}
{{--                                    href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}"--}}
{{--                                        alt="Revira"></a></div>--}}
{{--                            <div class="info-right"><a class="font-xs color-gray-500"--}}
{{--                                    href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"--}}
{{--                                    href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500">(65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To--}}
{{--                                        Cart</a></div>--}}
{{--                                <ul class="list-features">--}}
{{--                                    <li>27-inch (diagonal) Retina 5K display</li>--}}
{{--                                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>--}}
{{--                                    <li>AMD Radeon Pro 5300 graphics</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-grid-style-3">--}}
{{--                        <div class="card-grid-inner">--}}
{{--                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"--}}
{{--                                    aria-label="Trend" data-bs-placement="left"></a><a--}}
{{--                                    class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"--}}
{{--                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"--}}
{{--                                    href="{{url('compare')}}" aria-label="Compare"></a><a--}}
{{--                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"--}}
{{--                                    data-bs-toggle="modal"></a></div>--}}
{{--                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a--}}
{{--                                    href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}"--}}
{{--                                        alt="Revira"></a></div>--}}
{{--                            <div class="info-right"><a class="font-xs color-gray-500"--}}
{{--                                    href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"--}}
{{--                                    href="{{url('shop-single-product')}}">Samsung Galaxy Tab A7 Lite, 8.7&quot; Tablet 32</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500">(65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To--}}
{{--                                        Cart</a></div>--}}
{{--                                <ul class="list-features">--}}
{{--                                    <li>27-inch (diagonal) Retina 5K display</li>--}}
{{--                                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>--}}
{{--                                    <li>AMD Radeon Pro 5300 graphics</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-grid-style-3">--}}
{{--                        <div class="card-grid-inner">--}}
{{--                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"--}}
{{--                                    aria-label="Trend" data-bs-placement="left"></a><a--}}
{{--                                    class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"--}}
{{--                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"--}}
{{--                                    href="{{url('compare')}}" aria-label="Compare"></a><a--}}
{{--                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"--}}
{{--                                    data-bs-toggle="modal"></a></div>--}}
{{--                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a--}}
{{--                                    href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}"--}}
{{--                                        alt="Revira"></a></div>--}}
{{--                            <div class="info-right"><a class="font-xs color-gray-500"--}}
{{--                                    href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"--}}
{{--                                    href="{{url('shop-single-product')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500">(65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To--}}
{{--                                        Cart</a></div>--}}
{{--                                <ul class="list-features">--}}
{{--                                    <li>27-inch (diagonal) Retina 5K display</li>--}}
{{--                                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>--}}
{{--                                    <li>AMD Radeon Pro 5300 graphics</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="card-grid-style-3">--}}
{{--                        <div class="card-grid-inner">--}}
{{--                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"--}}
{{--                                    aria-label="Trend" data-bs-placement="left"></a><a--}}
{{--                                    class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"--}}
{{--                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"--}}
{{--                                    href="{{url('compare')}}" aria-label="Compare"></a><a--}}
{{--                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"--}}
{{--                                    data-bs-toggle="modal"></a></div>--}}
{{--                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a--}}
{{--                                    href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}"--}}
{{--                                        alt="Revira"></a></div>--}}
{{--                            <div class="info-right"><a class="font-xs color-gray-500"--}}
{{--                                    href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"--}}
{{--                                    href="{{url('shop-single-product')}}">HDR Smart Portable Projector - SP-LSP3B</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500">(65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To--}}
{{--                                        Cart</a></div>--}}
{{--                                <ul class="list-features">--}}
{{--                                    <li>27-inch (diagonal) Retina 5K display</li>--}}
{{--                                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>--}}
{{--                                    <li>AMD Radeon Pro 5300 graphics</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <h4 class="color-brand-3">Recently viewed items</h4>--}}
{{--                <div class="row mt-40">--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                        <div class="card-grid-style-2 card-grid-none-border hover-up">--}}
{{--                            <div class="image-box"><a href="#"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}"--}}
{{--                                        alt="Revira"></a>--}}
{{--                            </div>--}}
{{--                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a--}}
{{--                                    class="color-brand-3 font-xs-bold" href="#">HP 24 All-in-One PC, Intel Core--}}
{{--                                    i3-1115G4</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500"> (65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                        <div class="card-grid-style-2 card-grid-none-border hover-up">--}}
{{--                            <div class="image-box"><a href="#"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}"--}}
{{--                                        alt="Revira"></a>--}}
{{--                            </div>--}}
{{--                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a--}}
{{--                                    class="color-brand-3 font-xs-bold" href="#">HP 22 All-in-One PC, Intel Pentium--}}
{{--                                    Silver</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500"> (65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                        <div class="card-grid-style-2 card-grid-none-border hover-up">--}}
{{--                            <div class="image-box"><a href="#"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}"--}}
{{--                                        alt="Revira"></a>--}}
{{--                            </div>--}}
{{--                            <div class="info-right"><span class="font-xs color-gray-500">Class</span><br><a--}}
{{--                                    class="color-brand-3 font-xs-bold" href="#">Class 4K UHD (2160P) LED Roku Smart--}}
{{--                                    TV HDR</a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500"> (65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3 col-md-6 col-sm-12">--}}
{{--                        <div class="card-grid-style-2 card-grid-none-border hover-up">--}}
{{--                            <div class="image-box"><a href="#"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}"--}}
{{--                                        alt="Revira"></a>--}}
{{--                            </div>--}}
{{--                            <div class="info-right"><span class="font-xs color-gray-500">LG</span><br><a--}}
{{--                                    class="color-brand-3 font-xs-bold" href="#">LG 65&quot; Class 4K UHD Smart TV--}}
{{--                                    OLED A1 Series </a>--}}
{{--                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img--}}
{{--                                        src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span--}}
{{--                                        class="font-xs color-gray-500"> (65)</span></div>--}}
{{--                                <div class="price-info"><strong--}}
{{--                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span--}}
{{--                                        class="color-gray-500 price-line">$3225.6</span></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </section>
    @endsection
