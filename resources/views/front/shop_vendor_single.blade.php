@extends('front.layout.layout')
@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{url('index')}}">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="blog.php">Revira JSC</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section-box shop-template mt-30">
        <div class="container">
            <div class="d-flex box-banner-vendor">
                <div class="vendor-left">
                    <div class="banner-vendor"><img src="assets/imgs/page/vendor/featured.png" alt="Revira">
                        <div class="d-flex box-info-vendor">
                            <div class="avarta"><img class="mb-5" src="assets/imgs/page/vendor/fasfox.png"
                                    alt="Revira"><a class="btn btn-buy font-xs" href="{{url('shop-full-width')}}">360 Products</a>
                            </div>
                            <div class="info-vendor">
                                <h4 class="mb-5">Fasfox Coporation</h4><span class="font-xs color-gray-500 mr-20">Member
                                    since 2012</span>
                                <div class="rating d-inline-block"><img src="assets/imgs/template/icons/star.svg"
                                        alt="Revira"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500"> (65)</span></div>
                            </div>
                            <div class="vendor-contact">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-12">
                                        <div class="d-inline-block font-md color-gray-500 location mb-10">5171 W Campbell
                                            Ave undefined Kent, Utah 53127 United States</div>
                                    </div>
                                    <div class="col-xl-5 col-lg-12">
                                        <div class="d-inline-block font-md color-gray-500 phone">(+91) -
                                            540-025-124553<br>(+91) - 540-025-235688</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vendor-right">
                    <div class="box-featured-product">
                        <div class="item-featured">
                            <div class="featured-icon"><img src="assets/imgs/page/product/delivery.svg" alt="Revira">
                            </div>
                            <div class="featured-info"><span class="font-sm-bold color-gray-1000">Free Delivery</span>
                                <p class="font-sm color-gray-500 font-medium">From all orders over $10</p>
                            </div>
                        </div>
                        <div class="item-featured">
                            <div class="featured-icon"><img src="assets/imgs/page/product/support.svg" alt="Revira"></div>
                            <div class="featured-info"><span class="font-sm-bold color-gray-1000">Support 24/7</span>
                                <p class="font-sm color-gray-500 font-medium">Shop with an expert</p>
                            </div>
                        </div>
                        <div class="item-featured">
                            <div class="featured-icon"><img src="assets/imgs/page/product/return.svg" alt="Revira"></div>
                            <div class="featured-info"><span class="font-sm-bold color-gray-1000">Return & Refund</span>
                                <p class="font-sm color-gray-500 font-medium">Free return over $200</p>
                            </div>
                        </div>
                        <div class="item-featured">
                            <div class="featured-icon"><img src="assets/imgs/page/product/payment.svg" alt="Revira"></div>
                            <div class="featured-info"><span class="font-sm-bold color-gray-1000">Secure payment</span>
                                <p class="font-sm color-gray-500 font-medium">100% Protected</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-20 border-vendor"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box-filters mt-0 pb-5 border-bottom">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a
                                    class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"
                                    data-bs-toggle="modal">All Fillters</a></div>
                            <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span
                                    class="font-sm color-gray-900 font-medium border-1-right span">Showing 1&ndash;16 of 17
                                    results</span>
                                <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort by:</span>
                                    <div class="dropdown dropdown-sort border-1-right">
                                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                            id="dropdownSort" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">Latest products</button>
                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"
                                            style="margin: 0px;">
                                            <li><a class="dropdown-item active" href="#">Latest products</a></li>
                                            <li><a class="dropdown-item" href="#">Oldest products</a></li>
                                            <li><a class="dropdown-item" href="#">Comments products</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>
                                    <div class="dropdown dropdown-sort border-1-right">
                                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                            id="dropdownSort2" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false" data-bs-display="static"><span>30 items</span></button>
                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                            <li><a class="dropdown-item active" href="#">30 items</a></li>
                                            <li><a class="dropdown-item" href="#">50 items</a></li>
                                            <li><a class="dropdown-item" href="#">100 items</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-inline-block"><a class="view-type-grid mr-5 active"
                                        href="{{url('shop-grid')}}"></a><a class="view-type-list" href="shop-list.php"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-products-5 mt-20">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp3.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp4.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp5.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp6.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp7.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp3.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp4.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp5.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp6.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp7.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp3.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp4.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp5.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp6.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp7.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp3.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp4.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp5.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img src="assets/imgs/page/homepage1/imgsp6.png"
                                            alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To
                                            Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                        aria-label="Trend" data-bs-placement="left"></a><a
                                        class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}"
                                        aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                        href="{{url('compare')}}" aria-label="Compare"></a><a
                                        class="btn btn-quickview btn-tooltip" aria-label="Quick view"
                                        href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                        href="{{url('shop-single-product-second')}}"><img
                                            src="assets/imgs/page/homepage1/imgsp7.png" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500"
                                        href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                        href="{{url('shop-single-product-second')}}">Samsung 36&quot; French door 28 cu. ft. Smart
                                        Energy Star </a>
                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><img src="assets/imgs/template/icons/star.svg"
                                            alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong
                                            class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                            class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add
                                            To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-20">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
