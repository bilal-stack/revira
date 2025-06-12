
@extends('front.layout.layout')


@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-sm color-gray-1000" href="{{url('/')}}">Home</a></li>
                    @php if (isset($categoryDetails['breadcrumbs'])) {
                        echo $categoryDetails['breadcrumbs'];
                        } else {
                            echo '<li><a class="font-sm color-gray-1000" href="#">Shop</a></li>';
                        }
                         @endphp
{{--                    <li><a class="font-xs color-gray-500" href="shop-grid-2.php">Accessories</a></li>--}}
                </ul>
            </div>
        </div>
    </div>

    <div class="section-box shop-template mt-30">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 order-first order-lg-last">
                    <div class="box-filters mt-0 pb-5 border-bottom">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center">
                            </div>
                            <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center">
                                <span class="font-sm color-gray-900 font-medium border-1-right span">
                                    Showing: {{ count($categoryProducts) }}
                                </span>

                                <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>
                                    <div class="dropdown dropdown-sort border-1-right">
                                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"
                                                id="dropdownSort2" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-display="static"><span>30
                                                items</span></button>
                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">
                                            <li><a class="dropdown-item active" href="#">30 items</a></li>
                                            <li><a class="dropdown-item" href="#">50 items</a></li>
                                            <li><a class="dropdown-item" href="#">100 items</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="d-inline-block">
                                    <form name="sortProducts" id="sortProducts">
                                        <input type="hidden" name="url" id="url" value="{{ $url }}">
                                        <span class="font-sm color-gray-500 font-medium">Sort by:</span>
                                        <div class="dropdown dropdown-sort">
                                            <select name="sort" id="sort" class="form-control select-box">
                                                {{-- <option selected="selected" value="">Sort By: Best Selling</option> --}}
                                                <option value="" selected>Select</option>
                                                <option value="product_latest" @if(isset($_GET['sort']) && $_GET['sort'] == 'product_latest') selected @endif>Sort By: Latest</option>
                                                <option value="price_lowest"   @if(isset($_GET['sort']) && $_GET['sort'] == 'price_lowest')   selected @endif>Sort By: Lowest Price</option>
                                                <option value="price_highest"  @if(isset($_GET['sort']) && $_GET['sort'] == 'price_highest')  selected @endif>Sort By: Highest Price</option>
                                                <option value="name_a_z"       @if(isset($_GET['sort']) && $_GET['sort'] == 'name_a_z')       selected @endif>Sort By: Name A - Z</option>
                                                <option value="name_z_a"       @if(isset($_GET['sort']) && $_GET['sort'] == 'name_z_a')       selected @endif>Sort By: Name Z - A</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="filter_products">
                        @include('front.products.ajax_products_listing')
                    </div>
                </div>

                <div class="col-lg-3 order-last order-lg-first">
                    @include('front.products.filters')
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
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/camera.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">HP Slim Desktop, Intel
                                                        Celeron J4025, 4GB RAM</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$150</strong><span
                                                            class="color-gray-500 font-sm price-line">$187</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><a href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/clock.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">Class 4K UHD (2160P) LED
                                                        Roku Smart TV HDR</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$2900</strong><span
                                                            class="color-gray-500 font-sm price-line">$3200</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><a href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/airpod.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">HP 11.6&quot; Chromebook,
                                                        AMD A4, 4GB RAM, 32GB Storage</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$160</strong><span
                                                            class="color-gray-500 font-sm price-line">$168</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><a href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/cat-img-7.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">LG 65&quot; Class 4K UHD
                                                        Smart TV OLED A1 Series</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$325</strong><span
                                                            class="color-gray-500 font-sm price-line">$392</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><a href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/cat-img-8.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">Lenovo Legion 5i
                                                        15.6&quot; Laptop, Intel Core i5</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$150</strong><span
                                                            class="color-gray-500 font-sm price-line">$187</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                                        href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/cat-img-1.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">SAMSUNG Galaxy Tab A7
                                                        Lite, 8.7&quot; Tablet 32GB</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$2900</strong><span
                                                            class="color-gray-500 font-sm price-line">$3200</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><a href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/cat-img-2.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">Apple AirPods Pro with
                                                        MagSafe Charging</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$160</strong><span
                                                            class="color-gray-500 font-sm price-line">$168</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                <div class="image-box"><a href="shop-single-product-3.php"><img
                                                            src="assets/imgs/page/homepage2/cat-img-3.png"
                                                            alt="Revira"></a>
                                                </div>
                                                <div class="info-right"><a class="color-brand-3 font-xs-bold"
                                                        href="shop-single-product-3.php">Razer Power Up Gaming
                                                        Bundle V2 - Cynosa</a>
                                                    <div class="rating"><img src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><img
                                                            src="assets/imgs/template/icons/star.svg"
                                                            alt="Revira"><span class="font-xs color-gray-500">
                                                            (65)</span></div>
                                                    <div class="price-info"><strong
                                                            class="font-md-bold color-brand-3 price-main">$325</strong><span
                                                            class="color-gray-500 font-sm price-line">$392</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller">
                                </div>
                                <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    @include('front.layout.scripts')
@stop
