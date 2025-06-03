    @extends('front.layout.layout')
    @section('content')
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ url('/') }}">Home</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ url('shop-grid') }}">Shop</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ url('shop-cart') }}">Cart</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="box-carts">
                            <div class="head-wishlist">
                                <div class="item-wishlist">
                                    <div class="wishlist-cb">
                                        <input class="cb-layout cb-all" type="checkbox">
                                    </div>
                                    <div class="wishlist-product"><span class="font-md-bold color-brand-3">Product</span>
                                    </div>
                                    <div class="wishlist-price"><span class="font-md-bold color-brand-3">Unit Price</span>
                                    </div>
                                    <div class="wishlist-status"><span class="font-md-bold color-brand-3">Quantity</span>
                                    </div>
                                    <div class="wishlist-action"><span class="font-md-bold color-brand-3">Subtotal</span>
                                    </div>
                                    <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Remove</span>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wishlist mb-20">

                                @php $total_price = 0 @endphp
                                @foreach ($getCartItems as $item)
                                    @php
                                        $getDiscountAttributePrice = \App\Models\Product::getDiscountAttributePrice(
                                            $item['product_id'],
                                            $item['size'],
                                        );
                                    @endphp
                                    <div class="item-wishlist">
                                        <div class="wishlist-cb">
                                            <input class="cb-layout cb-select" type="checkbox">
                                        </div>

                                        <div class="wishlist-product">
                                            <div class="product-wishlist">
                                                <div class="product-image">
                                                    <a href="{{ url('product/' . $item['product_id']) }}">
                                                        <img src="{{ asset('front/images/product_images/small/' . $item['product']['product_image']) }}"
                                                            alt="{{ $item['product']['product_name'] }}">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{ url('product/' . $item['product_id']) }}">
                                                        <h6 class="color-brand-3">
                                                            {{ $item['product']['product_name'] }}
                                                            ({{ $item['product']['product_code'] }})
                                                            - {{ $item['size'] }}
                                                        </h6>
                                                    </a>
                                                    <div class="rating">
                                                        @for ($i = 0; $i < 5; $i++)
                                                            <img src="{{ asset('assets/imgs/template/icons/star.svg') }}"
                                                                alt="star">
                                                        @endfor
                                                        <span class="font-xs color-gray-500">
                                                            ({{ $item['product']['rating'] ?? '0' }})</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wishlist-price">
                                            <h4 class="color-brand-3">
                                                @if ($getDiscountAttributePrice['discount'] > 0)
                                                    EGP {{ $getDiscountAttributePrice['final_price'] }}

                                                    {{-- {{ $getDiscountAttributePrice['product_price'] }} --}}
                                                @else
                                                    EGP {{ $getDiscountAttributePrice['final_price'] }}
                                                @endif
                                            </h4>
                                        </div>
                                        <div class="wishlist-status">
                                            <div class="box-quantity">
                                                <div class="input-quantity">
                                                    <input class="font-xl color-brand-3" type="text" value="{{ $item['quantity'] }}"><span
                                                        class="minus-cart"></span><span class="plus-cart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="wishlist-status">
                                            <div class="box-quantity">
                                                <div class="input-quantity">
                                                    <input class="font-xl color-brand-3" type="text"
                                                        value="{{ $item['quantity'] }}">
                                                    <span class="minus-cart updateCartItem"
                                                        data-cartid="{{ $item['id'] }}"
                                                        data-qty="{{ $item['quantity'] }}">–</span>
                                                    <span class="plus-cart updateCartItem"
                                                        data-cartid="{{ $item['id'] }}"
                                                        data-qty="{{ $item['quantity'] }}">+</span>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="wishlist-action">
                                            <h4 class="color-brand-3">
                                                EGP {{ $getDiscountAttributePrice['final_price'] * $item['quantity'] }}
                                            </h4>
                                        </div>

                                        <div class="wishlist-remove">
                                            <a class="btn btn-delete deleteCartItem" data-cartid="{{ $item['id'] }}"></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- Shipping & Coupon input from your original layout --}}
                            <div class="row mb-50">
                                <div class="col-lg-6 col-md-6">
                                    <div class="box-cart-left">
                                        <h5 class="font-md-bold mb-10">Calculate Shipping</h5>
                                        <span class="font-sm-bold mb-5 d-inline-block color-gray-500">Flat rate:</span>
                                        <span class="font-sm-bold d-inline-block color-brand-3">5%</span>
                                        <div class="form-group">
                                            <select class="form-control select-style1 color-gray-700"
                                                name="shipping_country">
                                                <option value="USA" @if (session('shipping_country') == 'USA') selected @endif>USA
                                                </option>
                                                <option value="EURO" @if (session('shipping_country') == 'EURO') selected @endif>
                                                    EURO</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 mb-10">
                                                <input class="form-control" placeholder="State / Country"
                                                    name="shipping_state" value="{{ session('shipping_state') }}">
                                            </div>
                                            <div class="col-lg-6 mb-10">
                                                <input class="form-control" placeholder="PostCode / ZIP" name="shipping_zip"
                                                    value="{{ session('shipping_zip') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="box-cart-right p-20">
                                        <h5 class="font-md-bold mb-10">Apply Coupon</h5>
                                        <span class="font-sm-bold mb-5 d-inline-block color-gray-500">Using A Promo
                                            Code?</span>
                                        <div class="form-group d-flex">
                                            <input class="form-control mr-15" placeholder="Enter Your Coupon"
                                                name="coupon_code" value="{{ session('coupon_code') }}">
                                            <button class="btn btn-buy w-auto" type="submit"
                                                formaction="{{ url('cart/apply-coupon') }}"
                                                formmethod="POST">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Buttons Continue Shopping and Update Cart --}}
                            <div class="row mb-40">
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6">
                                    <a class="btn btn-buy w-auto arrow-back mb-10" href="{{ url('shop-grid') }}">Continue
                                        shopping</a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6 text-md-end">
                                    <button type="submit" class="btn btn-buy w-auto update-cart mb-10">Update
                                        cart</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="summary-cart">
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Subtotal</span></div>
                                    <div class="col-6 text-end">
                                        <h4>EGP{{ number_format($total_price, 2) }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Coupon Discount</span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <h4>
                                            @if (session()->has('couponAmount'))
                                                EGP{{ number_format(session('couponAmount'), 2) }}
                                            @else
                                                EGP0
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Grand Total</span></div>
                                    <div class="col-6 text-end">
                                        <h4>
                                            EGP{{ number_format($total_price - (session('couponAmount') ?? 0), 2) }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-button">
                                <a class="btn btn-buy" href="{{ url('checkout') }}">Proceed To CheckOut</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h4 class="color-brand-3">You may also like</h4>
                <div class="list-products-5 mt-20 mb-40">
                    <div class="card-grid-style-3">
                        <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#"
                                    aria-label="Trend" data-bs-placement="left"></a><a
                                    class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php"
                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                    href="shop-compare.php" aria-label="Compare"></a><a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                    href="shop-single-product.php"><img src="assets/imgs/page/homepage1/imgsp3.png"
                                        alt="Revira"></a></div>
                            <div class="info-right"><a class="font-xs color-gray-500"
                                    href="shop-vendor-single.php">Hisense</a><br><a class="color-brand-3 font-sm-bold"
                                    href="shop-single-product.php">Hisense
                                    43&quot; Class 4K UHD LED XClass Smart TV
                                    HDR</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                        href="{{ url('shop-cart') }}">Add To
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
                                    class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php"
                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                    href="shop-compare.php" aria-label="Compare"></a><a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                    href="shop-single-product.php"><img src="assets/imgs/page/homepage1/imgsp4.png"
                                        alt="Revira"></a></div>
                            <div class="info-right"><a class="font-xs color-gray-500"
                                    href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                    href="shop-single-product.php">2025
                                    Apple 10.9-inch iPad Air Wi-Fi 64GB -
                                    Silver</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                        href="{{ url('shop-cart') }}">Add To
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
                                    class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php"
                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                    href="shop-compare.php" aria-label="Compare"></a><a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                    href="shop-single-product.php"><img src="assets/imgs/page/homepage1/imgsp5.png"
                                        alt="Revira"></a></div>
                            <div class="info-right"><a class="font-xs color-gray-500"
                                    href="shop-vendor-single.php">LG</a><br><a class="color-brand-3 font-sm-bold"
                                    href="shop-single-product.php">LG
                                    65&quot; Class 4K UHD Smart TV OLED A1 Series
                                </a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                        href="{{ url('shop-cart') }}">Add To
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
                                    class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php"
                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                    href="shop-compare.php" aria-label="Compare"></a><a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                    href="shop-single-product.php"><img src="assets/imgs/page/homepage1/imgsp6.png"
                                        alt="Revira"></a></div>
                            <div class="info-right"><a class="font-xs color-gray-500"
                                    href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold"
                                    href="shop-single-product.php">Apple
                                    AirPods Pro with MagSafe Charging Case</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                        href="{{ url('shop-cart') }}">Add To
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
                                    class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php"
                                    aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10"
                                    href="shop-compare.php" aria-label="Compare"></a><a
                                    class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                    data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                    href="shop-single-product.php"><img src="assets/imgs/page/homepage1/imgsp7.png"
                                        alt="Revira"></a></div>
                            <div class="info-right"><a class="font-xs color-gray-500"
                                    href="shop-vendor-single.php">Razer</a><br><a class="color-brand-3 font-sm-bold"
                                    href="shop-single-product.php">Razer
                                    Power Up Gaming Bundle V2 - Cynosa Lite</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500">(65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                                <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                        href="{{ url('shop-cart') }}">Add To
                                        Cart</a></div>
                                <ul class="list-features">
                                    <li>27-inch (diagonal) Retina 5K display</li>
                                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                    <li>AMD Radeon Pro 5300 graphics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="color-brand-3">Recently viewed items</h4>
                <div class="row mt-40">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-grid-style-2 card-grid-none-border hover-up">
                            <div class="image-box"><a href="shop-single-product.php"><img
                                        src="assets/imgs/page/homepage1/imgsp1.png" alt="Revira"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a
                                    class="color-brand-3 font-xs-bold" href="shop-single-product.php">HP
                                    DeskJet 2755e
                                    Wireless Color All-in-One Printer</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500"> (65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-grid-style-2 card-grid-none-border hover-up">
                            <div class="image-box"><a href="shop-single-product.php"><img
                                        src="assets/imgs/page/homepage1/imgsp2.png" alt="Revira"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a
                                    class="color-brand-3 font-xs-bold" href="shop-single-product.php">Original
                                    HP 63XL
                                    Black High-yield Ink Cartridge</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500"> (65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-grid-style-2 card-grid-none-border hover-up">
                            <div class="image-box"><a href="shop-single-product.php"><img
                                        src="assets/imgs/page/homepage1/imgsp1.png" alt="Revira"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Logitech</span><br><a
                                    class="color-brand-3 font-xs-bold" href="shop-single-product.php">Logitech
                                    H390
                                    Wired Headset, Stereo Headphones</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500"> (65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-grid-style-2 card-grid-none-border hover-up">
                            <div class="image-box"><a href="shop-single-product.php"><img
                                        src="assets/imgs/page/homepage1/imgsp2.png" alt="Revira"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Logitech</span><br><a
                                    class="color-brand-3 font-xs-bold" href="shop-single-product.php">Logitech
                                    MK345
                                    Wireless Combo Full-Sized</a>
                                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><img
                                        src="assets/imgs/template/icons/star.svg" alt="Revira"><span
                                        class="font-xs color-gray-500"> (65)</span></div>
                                <div class="price-info"><strong
                                        class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                        class="color-gray-500 price-line">$3225.6</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
