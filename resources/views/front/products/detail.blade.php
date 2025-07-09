{{-- Note: front/products/detail.blade.php is the page that opens when you click on a product in the FRONT home page --}} {{-- $productDetails, categoryDetails and $totalStock are passed in from detail() method in Front/ProductsController.php --}}
@extends('front.layout.layout')


@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>

                    @php
                        echo $categoryDetails['breadcrumbs']
                    @endphp

{{--                    <li><a class="font-xs color-gray-500" href="{{url('shop-grip')}}">Accessories</a></li>--}}
                </ul>
            </div>
        </div>
    </div>
    <section class="section-box shop-template">
        <div class="container">
            @if (Session::has('error_message')) <!-- Check AdminController.php, updateAdminPassword() method -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> {{ Session::get('error_message') }}
{{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
            </div>
            @endif


            {{-- Displaying Laravel Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors --}}
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

{{--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
                </div>
            @endif


            {{-- Displaying The Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors AND https://laravel.com/docs/9.x/blade#validation-errors --}}
            {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
            {{-- My Bootstrap success message in case of updating admin password is successful: --}}
            @if (Session::has('success_message')) <!-- Check AdminController.php, updateAdminPassword() method -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{-- There are TWO ways to: Displaying Unescaped Data: https://laravel.com/docs/9.x/blade#displaying-unescaped-data --}}
                <strong>Success:</strong> @php echo Session::get('success_message') @endphp       {{-- Displaying Unescaped Data: https://laravel.com/docs/9.x/blade#displaying-unescaped-data --}}

{{--                <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-image">
                        <div class="galleries">
                            <div class="detail-gallery">
                                @if ($productDetails['product_discount'] > 0)
                                    <label class="label">-%{{$productDetails['product_discount']}}</label>
                                @endif
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('front/images/product_images/large/' . $productDetails['product_image']) }}" alt="product image">
                                    </figure>
                                    @foreach ($productDetails['images'] as $image)
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('front/images/product_images/small/' . $image['image']) }}" alt="product image">
                                        </figure>
                                    @endforeach
                                </div>
                            </div>
                            <div class="slider-nav-thumbnails">
                                <div>
                                    <div class="item-thumb">
                                        <img src="{{ asset('front/images/product_images/large/' . $productDetails['product_image']) }}" alt="product image">
                                    </div>
                                </div>
                                @foreach ($productDetails['images'] as $image)
                                    <div>
                                        <div class="item-thumb">
                                            <img src="{{ asset('front/images/product_images/small/' . $image['image']) }}" alt="product image">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="color-brand-3 mb-25">{{ $productDetails['product_name'] }}</h3>
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile">
                            @if(isset($productDetails['vendor']))
                                <span class="bytext color-gray-500 font-xs font-medium">by</span>
                                <a class="byAUthor color-gray-900 font-xs font-medium" href="{{url($productDetails['vendor']['vendorbusinessdetails']['shop_name']. '/products')}}">
                                    {{ $productDetails['vendor']['vendorbusinessdetails']['shop_name'] }}
                                </a>
                            @endif
                            <div class="rating mt-5">
                                @php
                                    $avg = round($avgRating, 1); // average like 4.2
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
                                <span class="font-xs color-gray-500 font-medium"> ({{ number_format($avg, 1) }}/5) {{ count($ratings) }} reviews</span>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-9 text-start text-sm-end">
                            <a class="mr-20" href="{{url('wishlist/'. $productDetails['id'])}}">
                                <span class="btn btn-wishlist mr-5 opacity-100 transform-none"></span>
                                <span class="font-md color-gray-900">Add to Wish list</span>
                            </a>
{{--                            <a href="shop-compare.php"><span--}}
{{--                                    class="btn btn-compare mr-5 opacity-100 transform-none"></span><span--}}
{{--                                    class="font-md color-gray-900">Add to Compare</span></a>--}}
                        </div>
                    </div>
                    <div class="border-bottom pt-10 mb-20"></div>
                    <div class="box-product-price">
                        @php
                            $currency = session('currency', 'GBP');
                            $perPrice = $productDetails['product_price'] / $productDetails['quantity'];
                            $perPrice = currency($perPrice, $from = null, $currency);
                            $price = currency($productDetails['product_price'], $from = null, $currency);
                            $getDiscountPrice = \App\Models\Product::getDiscountPrice($productDetails['id']);
                        @endphp

                        @if ($getDiscountPrice > 0)
                            @php
                                $perPrice = round($getDiscountPrice / $productDetails['quantity'], 2);
                                $perPrice = currency($perPrice, $from = null, $currency);
                                $discountPrice = currency($getDiscountPrice, $from = null, $currency);
                            @endphp
                            <div class="col-md-2 pb-10">
                                <span class="badge bg-warning" style="background-color: #ff5400!important; font-size: 14px; padding: 8px 12px;">
                                    -%{{$productDetails['product_discount']}} Discount
                                </span>
                            </div>

                            <h3 class="color-brand-3 price-main d-inline-block mr-10 getAttributePrice" >{{$perPrice}}/pc ({{$discountPrice}})</h3>
                            <span class="color-gray-500 price-line font-xl line-througt">{{$price}}</span>
                        @else
                            <h3 class="color-brand-3 price-main d-inline-block mr-10 getAttributePrice">{{$perPrice}}/pc ({{$price}})</h3>
                        @endif

                    </div>


                    @if (count($groupProducts) > 0)
                        <div class="box-product-color mt-20">
                            <p class="font-sm color-gray-900">Color:</p>
                            <ul class="list-colors">
                                @foreach ($groupProducts as $product)
                                    <li>
                                        <a href="{{ url('product/' . $product['id']) }}">
                                            <img src="{{ asset('front/images/product_images/small/' . $product['product_image']) }}" alt="Revira">
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="product-description mt-20 color-gray-900">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <style>
                                    .custom-table th,
                                    .custom-table td {
                                        padding: 12px;
                                        border-bottom: 1px solid #dee2e6; /* Light gray line */
                                    }

                                    .custom-table th {
                                        width: 30%;
                                        font-weight: 600;
                                    }
                                </style>

                                <table class="w-100 custom-table mt-4">
                                    <tbody>
                                    @if($productDetails['category']['parent_id'] != 0)
                                        <tr>
                                            <th>Department</th>
                                            <td class="font-md-bold" style="text-align:right">{{ \App\Models\Category::find($productDetails['category']['parent_id'])?->category_name ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th>Category</th>
                                            <td class="font-md-bold" style="text-align:right">
                                                <a href="{{ url($productDetails['category']['url']) }}" target="_blank" class="text-decoration-none text-primary">
                                                    {{ $productDetails['category']['category_name'] }}
                                                </a>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <th>Department</th>
                                            <td class="font-md-bold" style="text-align:right">
                                                <a href="{{ url('category/' . $productDetails['category']['url']) }}" target="_blank" class="text-decoration-none text-primary">
                                                    {{ $productDetails['category']['category_name'] }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                    @if(!empty($productDetails['brand']))
                                        <tr>
                                            <th>Brand</th>
                                            <td class="font-md-bold" style="text-align:right">{{$productDetails['brand']['name']}}</td>
                                        </tr>
                                    @endif
                                    @if(!empty($productDetails['grade']))
                                        <tr>
                                            <th>Grade</th>
                                            <td class="font-md-bold" style="text-align:right">{{strtoupper($productDetails['grade'])}}</td>
                                        </tr>
                                    @endif

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <form action="{{ url('cart/add') }}" method="Post" class="post-form">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $productDetails['id'] }}">
                        <input type="hidden" name="size" value="{{ $productDetails['attributes'][0]['size'] }}">
                        <div class="box-product-style-size mt-20">
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6 col-md-6 mb-20">--}}
{{--                                <p class="font-sm color-gray-900">Size:</p>--}}
{{--                                <select class="form-control select-box product-size" id="getPrice" product-id="{{ $productDetails['id'] }}" name="size" required> --}}{{-- Check front/js/custom.js file --}}
{{--                                    <option value="">Select Size</option>--}}
{{--                                    @foreach ($productDetails['attributes'] as $attribute)--}}
{{--                                        <option value="{{ $attribute['size'] }}">{{ $attribute['size'] }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

{{--                        <input hidden="" class="font-xl color-brand-3" type="number" name="quantity" value="1">--}}
                        <div class="buy-product mt-30">
                            <div class="d-flex align-items-center gap-3 mb-30">
                                <p class="font-sm mb-1">Bundle of:</p>
                                <span class="badge bg-dark" style="font-size: 14px; padding: 8px 12px;">
                                    {{ $productDetails['quantity'] }}pcs
                                </span>
                            </div>
                            <div class="box-quantity d-flex align-items-center gap-3 mb-30">
                                <p class="font-sm mb-1">Quantity:</p>
                                <div class="input-quantity">
                                    <input class="font-xl color-brand-3" type="number" name="quantity" value="1">
                                    <span class="minus-cart"></span>
                                    <span class="plus-cart"></span>
                                </div>

                            </div>
                            <div class="button-buy row g-2 mt-3">
                                <div class="col-6">
                                    <button class="btn btn-cart w-100" type="submit" style="max-width: unset;">Add to cart</button>
                                </div>
                                @if(isset($productDetails['vendor']))
                                    <div class="col-6">
                                        @php
                                            $vendorId = userFromVendor($productDetails['vendor']['id']);
                                        @endphp
                                        <a href="{{url('chat/'.$vendorId)}}" class="btn btn-cart w-100 text-white d-flex align-items-center justify-content-center"
                                           style="max-width: unset; background-color: #ff5400; border-color: #ff5400;">
                                            <i class="fa-regular fa-message me-2"></i> MESSAGE THE SELLER
                                        </a>
                                    </div>
                                @endif

                                <div class="col-6">
                                    <a href="{{url('chat/1')}}" class="btn btn-cart w-100 text-white d-flex align-items-center justify-content-center"
                                       style="max-width: unset; background-color: #ff5400; border-color: #ff5400;">
                                        <i class="fa-regular fa-message me-2"></i> MESSAGE THE SELLER
                                    </a>
                                </div>

                            </div>
                        </div>
                    </form>
{{--                    <div class="info-product mt-40">--}}
{{--                        <div class="row align-items-end">--}}
{{--                            <div class="col-lg-4 col-md-4 mb-20">--}}
{{--                                <span class="font-sm font-medium color-gray-900">SKU:--}}
{{--                                    <span class="color-gray-500">{{ $productDetails['product_code'] }}</span>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="product-description mt-20 color-gray-900">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p>
                                    {!! nl2br($productDetails['description']) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box shop-template">
        <div class="container">
            <div class="pt-30 mb-10">
                <ul class="nav nav-tabs nav-tabs-product" role="tablist">
                    <li><a class="active" href="#tab-specification" data-bs-toggle="tab" role="tab"
                           aria-controls="tab-specification" aria-selected="true">Specification</a></li>
                    @if ($productDetails['product_video'])
                    <li><a href="#tab-additional" data-bs-toggle="tab" role="tab" aria-controls="tab-additional"
                           aria-selected="true">Additional information</a></li>
                    @endif
                    <li><a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews"
                           aria-selected="true">Reviews ({{count($ratings)}})</a></li>
                    @if(isset($productDetails['vendor']))
                    <li><a href="#tab-vendor" data-bs-toggle="tab" role="tab" aria-controls="tab-vendor"
                           aria-selected="true">Vendor</a></li>
                    @endif
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="tab-specification" role="tabpanel"
                         aria-labelledby="tab-specification">
                        <h5 class="mb-25">Specification</h5>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                @foreach ($productDetails['attributes'] as $attribute)
                                    <tr>
                                        <td>Pieces:</td>
                                        <td>{{ $attribute['size'] }}</td>
                                        <td>SKU:</td>
                                        <td>{{ $attribute['sku'] }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                    @if ($productDetails['product_video'])
                        <div class="tab-pane fade" id="tab-additional" role="tabpanel" aria-labelledby="tab-additional">
                            <h5 class="mb-25">Additional information</h5>
                            <div class="table-responsive">
                                <video controls>
                                    <source src="{{ url('front/videos/product_videos/' . $productDetails['product_video']) }}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    @endif
                    <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">
                        <div class="comments-area">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="comment-list">
                                        @if (count($ratings) > 0)
                                            @foreach($ratings as $rating)
                                                <div class="single-comment justify-content-between d-flex mb-30 hover-up">
                                                    <div class="user justify-content-between d-flex">
                                                        <div class="thumb text-center">
                                                            <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Revira">
                                                            <a class="font-heading text-brand" href="#">{{ $rating['user']['name'] }}</a>
                                                        </div>
                                                        <div class="desc">
                                                            <div class="d-flex justify-content-between mb-10">
                                                                <div class="d-flex align-items-center">
                                                                    <span class="font-xs color-gray-700">{{ date('d-m-Y H:i:s', strtotime($rating['created_at'])) }}</span>
                                                                </div>
                                                                <div class="product-rate d-inline-block">
                                                                    @php
                                                                        $count = 0;

                                                                        // Show the stars
                                                                        while ($count < $rating['rating']): // while $count is 0, 1, 2, 3, 4, or 5 Stars
                                                                    @endphp

                                                                    <span style="color: gold">&#9733;</span>

                                                                    @php
                                                                        $count++;
                                                                    endwhile;
                                                                    @endphp
                                                                </div>
                                                            </div>
                                                            <p class="mb-10 font-sm color-gray-900">
                                                                {{ $rating['review'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <h4 class="mb-30 title-question">Customer reviews</h4>
                                    <div class="d-flex mb-30">
                                        <div class="product-rate d-inline-block mr-15">
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
                                        </div>
                                        <h6>{{ $avgRating }} out of 5</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @if(isset($productDetails['vendor']))
                        <div class="tab-pane fade" id="tab-vendor" role="tabpanel" aria-labelledby="tab-vendor">
                            <div class="vendor-logo d-flex mb-30">
                                @if(!empty($productDetails['vendor']['vendorbusinessdetails']['shop_image']))
                                    <img src="{{ url('admin/images/photos/' . $productDetails['vendor']['vendorbusinessdetails']['shop_image']) }}" alt="{{ $productDetails['vendor']['vendorbusinessdetails']['shop_name'] }}">
                                @else
                                    <img src="{{asset('front/images/store-default.png')}}" alt="{{ $productDetails['vendor']['vendorbusinessdetails']['shop_name'] }}">
                                @endif
                                <div class="vendor-name ml-15">
                                    <h6><a href="/products/{{ $productDetails['vendor']['id'] }}">{{ $productDetails['vendor']['vendorbusinessdetails']['shop_name'] }}.</a></h6>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="border-bottom pt-30 mb-50"></div>
                    <h4 class="color-brand-3">Related Products</h4>
                    <div class="list-products-5 mt-20">
                        @foreach ($similarProducts as $product)
                         <div class="card-grid-style-3">
                            <div class="card-grid-inner">
                                <div class="tools">
                                    <a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist/'. $product['id'])}}" aria-label="Add To Wishlist"></a>
                                    {{--                                        <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                                </div>
                                <div class="image-box">
                                    <span class="label bg-brand-2">-%{{$product['product_discount']}}</span>
                                    <a href="{{ url('product/' . $product['id']) }}">
                                        @php
                                            $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                        @endphp
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
                                    @include('front.layout.price')
{{--                                    <p class="list-features">--}}
{{--                                        {{ $product['description'] }}--}}
{{--                                    </p>--}}
                                    <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{url('shop-cart')}}">Add To Cart</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="border-bottom pt-20 mb-40"></div>
                    <h4 class="color-brand-3">Recently viewed items</h4>
                    <div class="row mt-40">
                        @foreach ($recentlyViewedProducts as $product)
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box"><a href="{{ url('product/' . $product['id']) }}">
                                            @php
                                                $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
                                            @endphp

                                            @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                <img class="img-fluid" src="{{ asset($product_image_path) }}" alt="Product">
                                            @else {{-- show the dummy image --}}
                                                <img class="img-fluid" src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                        @endif
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span><br><a
                                            class="color-brand-3 font-xs-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}
                                            Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
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
                                        @include('front.layout.price')
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

