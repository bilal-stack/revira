@extends('front.layout.layout')
@section('content')

<div class="section-box">
    <div class="breadcrumbs-div">
        <div class="container">
            <ul class="breadcrumb">
                <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
                <li><a class="font-xs color-gray-500" href="{{url('shop-grid')}}">Electronics</a></li>
                <li><a class="font-xs color-gray-500" href="{{url('shop-grid')}}">Cell phone</a></li>
                <li><a class="font-xs color-gray-500" href="{{url('shop-grid')}}">Accessories</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="section-box shop-template mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-first order-lg-last">
                <div class="banner-ads-top mb-30"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/shop/banner.png')}}" alt="Revira"></a></div>
                <div class="box-filters mt-0 pb-5 border-bottom">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
                        <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span class="font-sm color-gray-900 font-medium border-1-right span">Showing 1&ndash;16 of 17 results</span>
                            <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort by:</span>
                                <div class="dropdown dropdown-sort border-1-right">
                                    <button class="btn dropdown-toggle font-sm color-gray-900 font-medium" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false">Latest products</button>
                                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort" style="margin: 0px;">
                                        <li><a class="dropdown-item active" href="#">Latest products</a></li>
                                        <li><a class="dropdown-item" href="#">Oldest products</a></li>
                                        <li><a class="dropdown-item" href="#">Comments products</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>
                                <div class="dropdown dropdown-sort border-1-right">
                                    <button class="btn dropdown-toggle font-sm color-gray-900 font-medium" id="dropdownSort2" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-display="static"><span>30 items</span></button>
                                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                        <li><a class="dropdown-item active" href="#">30 items</a></li>
                                        <li><a class="dropdown-item" href="#">50 items</a></li>
                                        <li><a class="dropdown-item" href="#">100 items</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-inline-block"><a class="view-type-grid mr-5 active" href="{{url('shop-grid')}}"></a><a class="view-type-list" href="shop-list.php"></a></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-20">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Dell Optiplex 9020 Small Form Business Desktop</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">HP 24 All-in-One PC, Intel Core i3-1115G4</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Gateway 23.8&quot; All-in-one Desktop, Fully Adjustable</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">HP 22 All-in-One PC, Intel Pentium Silver J5040</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">HP Slim Desktop, Intel Celeron J4025, 4GB RAM</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Class 4K UHD (2160P) LED Roku Smart TV HDR</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Galaxy Tab S7 Plus 12.4&quot; 128GB Mystic Black</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">HP 11.6&quot; Chromebook, AMD A4, 4GB RAM, 32GB Storage</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">MSI Optix G272 27&quot; Full HD LED Gaming LCD Monitor</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">RCA 43&quot; Class 4K Ultra HD (2160P) HDR Roku Smart</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Bose Sport Earbuds True Wireless Headphones</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">ASUS VivoBook 15.6&quot; 1080p PC Laptops, Intel Core i3</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Apple Watch Series 7 GPS + Cellular, 41mm Midnight</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Hisense 43&quot; Class 4K UHD LED XClass Smart TV HDR</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple 10.9-inch iPad Air Wi-Fi 64GB - Silver</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Chromecast with Google TV - Streaming Entertainment</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">LG 65&quot; Class 4K UHD Smart TV OLED A1 Series</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">HDR Smart Portable Projector - SP- 2025</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Lenovo Legion 5i 15.6&quot; Laptop, Intel Core i5</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Apple AirPods Pro with MagSafe Charging Case</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Razer Power Up Gaming Bundle V2 - Cynosa Lit</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Seagate Portable 2TB External Hard Drive Portable</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">SanDisk 128GB Ultra microSDXC UHS-I Memory</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Original HP 63XL Black High-yield Ink Cartridge</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">2025 Apple iMac Retina 5K Display 8GB RAM, 256GB SSD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Logitech C920x HD Pro Webcam, Full HD</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">HP 24mh FHD Monitor - Computer Monitor with 23.8-Inch</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Logitech H390 Wired Headset, Stereo Headphones with Noise</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Logitech MK345 Wireless Combo Full-Sized Keyboard with Palm</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist')}}" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="{{url('compare')}}" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="{{url('shop-single-product')}}"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                                <div class="info-right"><a class="font-xs color-gray-500" href="{{url('shop-vendor-single')}}">Apple</a><br><a class="color-brand-3 font-sm-bold" href="{{url('shop-single-product')}}">Logitech Brio 4K Webcam, Ultra 4K HD Video Calling 2T Storage</a>
                                    <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                                    <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                                    <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="{{url('cart')}}">Add To Cart</a></div>
                                    <ul class="list-features">
                                        <li>27-inch (diagonal) Retina 5K display</li>
                                        <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                        <li>AMD Radeon Pro 5300 graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            <div class="col-lg-3 order-last order-lg-first">
                <div class="sidebar-border mb-0">
                    <div class="sidebar-head">
                        <h6 class="color-gray-900">Product Categories</h6>
                    </div>
                    <div class="sidebar-content">
                        <ul class="list-nav-arrow">
                            <li><a href="{{url('shop-grid')}}">Computers &amp; Laptop<span class="number">09</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Electric accessories<span class="number">12</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Mainboard &amp; CPU<span class="number">24</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Bluetooth devices<span class="number">34</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Mouse &amp; Keyboard<span class="number">65</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Wired Headphone<span class="number">15</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Gaming Gatgets<span class="number">76</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Smart watches<span class="number">89</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Cell Phones<span class="number">23</span></a></li>
                            <li><a href="{{url('shop-grid')}}">Headphone<span class="number">98</span></a></li>
                        </ul>
                        <div>
                            <div class="collapse" id="moreMenu">
                                <ul class="list-nav-arrow">
                                    <li><a href="{{url('shop-grid')}}">Home theater<span class="number">98</span></a></li>
                                    <li><a href="{{url('shop-grid')}}">Cameras & drones<span class="number">124</span></a></li>
                                    <li><a href="{{url('shop-grid')}}">PC gaming<span class="number">56</span></a></li>
                                    <li><a href="{{url('shop-grid')}}">Smart home<span class="number">87</span></a></li>
                                    <li><a href="{{url('shop-grid')}}">Networking<span class="number">36</span></a></li>
                                </ul>
                            </div><a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu" role="button" aria-expanded="false" aria-controls="moreMenu">See More</a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-border mb-40">
                    <div class="sidebar-head">
                        <h6 class="color-gray-900">Products Filter</h6>
                    </div>
                    <div class="sidebar-content">
                        <h6 class="color-gray-900 mt-10 mb-10">Price</h6>
                        <div class="box-slider-range mt-20 mb-15">
                            <div class="row mb-20">
                                <div class="col-sm-12">
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="lb-slider font-sm color-gray-500">Price Range:</label><span class="min-value-money font-sm color-gray-1000"></span>
                                    <label class="lb-slider font-sm font-medium color-gray-1000"></label>-
                                    <span class="max-value-money font-sm font-medium color-gray-1000"></span>
                                </div>
                                <div class="col-lg-12">
                                    <input class="form-control min-value" type="hidden" name="min-value" value="">
                                    <input class="form-control max-value" type="hidden" name="max-value" value="">
                                </div>
                            </div>
                        </div>
                        <ul class="list-checkbox">
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox" checked="checked"><span class="text-small">Free - $100</span><span class="checkmark"></span>
                                </label><span class="number-item">145</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">$100 - $200</span><span class="checkmark"></span>
                                </label><span class="number-item">56</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">$200 - $400</span><span class="checkmark"></span>
                                </label><span class="number-item">23</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">$400 - $600</span><span class="checkmark"></span>
                                </label><span class="number-item">43</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">$600 - $800</span><span class="checkmark"></span>
                                </label><span class="number-item">65</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">Over $1000</span><span class="checkmark"></span>
                                </label><span class="number-item">56</span>
                            </li>
                        </ul>
                        <h6 class="color-gray-900 mt-20 mb-10">Brands</h6>
                        <ul class="list-checkbox">
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox" checked="checked"><span class="text-small">Apple</span><span class="checkmark"></span>
                                </label><span class="number-item">12</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">Sony</span><span class="checkmark"></span>
                                </label><span class="number-item">34</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">Toshiba</span><span class="checkmark"></span>
                                </label><span class="number-item">56</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">Assus</span><span class="checkmark"></span>
                                </label><span class="number-item">78</span>
                            </li>
                            <li>
                                <label class="cb-container">
                                    <input type="checkbox"><span class="text-small">Samsung</span><span class="checkmark"></span>
                                </label><span class="number-item">23</span>
                            </li>
                        </ul>
                        <h6 class="color-gray-900 mt-20 mb-10">Color</h6>
                        <ul class="list-color">
                            <li><a class="color-red active" href="#"></a><span>Red</span></li>
                            <li><a class="color-green" href="#"></a><span>Green</span></li>
                            <li><a class="color-blue" href="#"></a><span>Blue</span></li>
                            <li><a class="color-purple" href="#"></a><span>Purple</span></li>
                            <li><a class="color-black" href="#"></a><span>Black</span></li>
                            <li><a class="color-gray" href="#"></a><span>Gray</span></li>
                            <li><a class="color-pink" href="#"></a><span>Pink</span></li>
                            <li><a class="color-brown" href="#"></a><span>Brown</span></li>
                            <li><a class="color-yellow" href="#"></a><span>Yellow</span></li>
                        </ul><a class="btn btn-filter font-sm color-brand-3 font-medium mt-10" href="#ModalFiltersForm" data-bs-toggle="modal">More Fillters</a>
                    </div>
                </div>
                <div class="box-slider-item mb-30">
                    <div class="head pb-15 border-brand-2">
                        <h5 class="color-gray-900">Best seller</h5>
                    </div>
                    <div class="content-slider">
                        <div class="box-swiper slide-shop">
                            <div class="swiper-container swiper-best-seller">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/camera.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">HP Slim Desktop, Intel Celeron J4025, 4GB RAM</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$150</strong><span class="color-gray-500 font-sm price-line">$187</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/clock.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">Class 4K UHD (2160P) LED Roku Smart TV HDR</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$2900</strong><span class="color-gray-500 font-sm price-line">$3200</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/airpod.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">HP 11.6&quot; Chromebook, AMD A4, 4GB RAM, 32GB Storage</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$160</strong><span class="color-gray-500 font-sm price-line">$168</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-7.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">LG 65&quot; Class 4K UHD Smart TV OLED A1 Series</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$325</strong><span class="color-gray-500 font-sm price-line">$392</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-8.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">Lenovo Legion 5i 15.6&quot; Laptop, Intel Core i5</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$150</strong><span class="color-gray-500 font-sm price-line">$187</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-1.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">SAMSUNG Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$2900</strong><span class="color-gray-500 font-sm price-line">$3200</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-2.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">Apple AirPods Pro with MagSafe Charging</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$160</strong><span class="color-gray-500 font-sm price-line">$168</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                            <div class="image-box"><a href="shop-single-product-3.php"><img src="{{asset('front/new/assets/imgs/page/homepage2/cat-img-3.png')}}" alt="Revira"></a>
                                            </div>
                                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.php">Razer Power Up Gaming Bundle V2 - Cynosa</a>
                                                <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                                                <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$325</strong><span class="color-gray-500 font-sm price-line">$392</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller"></div>
                            <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller"></div>
                        </div>
                    </div>
                </div>
                <div class="box-slider-item">
                    <div class="head pb-15 border-brand-2">
                        <h5 class="color-gray-900">Product Tags</h5>
                    </div>
                    <div class="content-slider mb-50"><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Games</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Electronics</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Video</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Cellphone</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Indoor</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">VGA Card</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">USB</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Lightning</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Camera</a><a class="btn btn-border" href="{{url('shop-grid')}}">Window</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Air Vent</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Bedroom</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Laptop</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Dashboard</a><a class="btn btn-border mr-5" href="{{url('shop-grid')}}">Keyboard</a></div>
                </div>
                <div class="banner-right h-500 text-center mb-30"><span class="text-no font-11">No.9</span>
                    <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint</h5>
                    <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p><a href="shop-single-product-2.php">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection