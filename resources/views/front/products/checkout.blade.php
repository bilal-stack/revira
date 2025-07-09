@extends('front.layout.layout')
@section('content')
    @php
        $currency = session('currency', 'GBP')
    @endphp
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="{{url('shop')}}">Shop</a></li>
                    <li><a class="font-xs color-gray-500" href="#">Checkout</a></li>
                </ul>
            </div>
        </div>
    </div>
   <section class="section-box shop-template">
    <div class="container">
        {{-- Show error message --}}
        @if (Session::has('error_message'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> {{ Session::get('error_message') }}
            </div>
        @endif

            <div class="row">

                <div class="col-lg-6">
                    <div class="box-border">
                        <div class="row">
                            <div class="col-lg-12" id="deliveryAddresses"> {{-- We created this id="deliveryAddresses" to use it as a handle for jQuery AJAX to refresh this page, check front/js/custom.js --}}
                                @include('front.products.delivery_addresses')
                            </div>
                        </div>
                        <form name="checkoutForm" id="checkoutForm" action="{{ url('/checkout') }}" method="post">
                            @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                @if (count($deliveryAddresses) > 0) {{-- Checking if there are any $deliveryAddreses for the currently authenticated/logged-in user --}} {{-- $deliveryAddresses variable is passed in from checkout() method in Front/ProductsController.php --}}

                                <h4 class="section-h4 mt-4 mb-4">Delivery Addresses</h4>

                                @foreach ($deliveryAddresses as $address)
                                    <div class="control-group" style="float: left; margin-right: 5px">
                                        {{-- We'll use the Custom HTML data attributes:    shipping_charges    ,    total_price    ,    coupon_amount    ,    codpincodeCount    and    prepaidpincodeCount    to use them as handles for jQuery to change the calculations in "Your Order" section using jQuery. Check front/js/custom.js file --}}
                                        <input type="radio" id="address{{ $address['id'] }}" name="address_id" value="{{ $address['id'] }}" shipping_charges="{{ $address['shipping_charges'] }}" total_price="{{ $total_price }}" coupon_amount="{{ \Illuminate\Support\Facades\Session::get('couponAmount') }}" codpincodeCount="{{ $address['codpincodeCount'] }}" prepaidpincodeCount="{{ $address['prepaidpincodeCount'] }}"> {{-- $total_price variable is passed in from checkout() method in Front/ProductsController.php --}} {{-- We created the Custom HTML Attribute id="address{{ $address['id'] }}" to get the UNIQUE ids of the addresses in order for the <label> HTML element to be able to point for that <input> --}}
                                    </div>
                                    <div>
                                        <label class="control-label" for="address{{ $address['id'] }}">
                                            {{ $address['name'] }}, {{ $address['address'] }}, {{ $address['city'] }}, {{ $address['state'] }}, {{ $address['country'] }} ({{ $address['mobile'] }})
                                        </label>
                                        <a href="javascript:;" data-addressid="{{ $address['id'] }}" class="removeAddress" style="float: right; margin-left: 10px">Remove</a> {{-- We used href="javascript:;" to prevent the <a> link from being clickable (to make the <a> unclickable) (stop the <a> function or action) because we'll use jQuery AJAX to click this link, check front/js/custom.js --}} {{-- We use the class="removeAddress" as a handle for the AJAX request in front/js/custom.js --}}
                                        <a href="javascript:;" data-addressid="{{ $address['id'] }}" class="editAddress"   style="float: right"                   >Edit</a>   {{-- We used href="javascript:;" to prevent the <a> link from being clickable (to make the <a> unclickable) (stop the <a> function or action) because we'll use jQuery AJAX to click this link, check front/js/custom.js --}} {{-- We use the class="editAddress" as a handle for the AJAX request in front/js/custom.js --}}
                                    </div>
                                @endforeach
                                <br>
                                @endif
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="form-group mb-0">
                                    <textarea class="form-control font-sm" placeholder="Additional Information" rows="5" name="additional_info">{{ old('additional_info', '') }}</textarea>
                                </div>

                                <div class="u-s-m-b-13 mt-4">
                                    <input type="checkbox" class="check-box" id="accept" name="accept" value="Yes" title="Please agree to T&C">
                                    <label class="label-text no-color" for="accept">I’ve read and accept the
                                        <a href="terms-and-conditions.html" class="u-c-brand">terms & conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-20">
                        <div class="col-lg-6 col-5 mb-20">
                            <a class="btn font-sm-bold color-brand-1 arrow-back-1" href="{{url('cart')}}">Return to Cart</a>
                        </div>
                        <div class="col-lg-6 col-7 mb-20 text-end">
                            <button type="submit" class="btn btn-buy w-auto arrow-next">Place an Order</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="box-border">
                        <h5 class="font-md-bold mb-20">Your Order</h5>
                        <div class="listCheckout">
                            @if (!empty($getCartItems) && count($getCartItems) > 0)
                                @foreach ($getCartItems as $item)
                                    @php
                                        $discountPriceData = \App\Models\Product::getDiscountAttributePrice($item['product_id'], $item['size']);
                                        $discountPrice = is_array($discountPriceData) ? ($discountPriceData['final_price'] ?? 0) : $discountPriceData;
                                    @endphp
                                    <div class="item-wishlist">
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
                                                        <h6 class="color-brand-3">{{ $item['product']['product_name'] }}</h6>
                                                    </a>
{{--                                                    <div class="rating">--}}
{{--                                                        <img src="assets/imgs/template/icons/star.svg" alt="star">--}}
{{--                                                        <img src="assets/imgs/template/icons/star.svg" alt="star">--}}
{{--                                                        <img src="assets/imgs/template/icons/star.svg" alt="star">--}}
{{--                                                        <img src="assets/imgs/template/icons/star.svg" alt="star">--}}
{{--                                                        <img src="assets/imgs/template/icons/star.svg" alt="star">--}}
{{--                                                        <span class="font-xs color-gray-500"> (65)</span>--}}
{{--                                                    </div>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wishlist-status">
                                            <h5 class="color-gray-500">x{{ $item['quantity'] }}</h5>
                                        </div>
                                        <div class="wishlist-price">
                                            <h4 class="color-brand-3 font-lg-bold">
                                                @php
                                                    $price = $discountPrice * $item['quantity'];
                                                    $price = currency($price, $from = null, $currency);
                                                @endphp
                                                {{ $price }}
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p>Your cart is empty.</p>
                            @endif
                        </div>

                        {{-- Coupon Section --}}
                        <div class="coupon-code mt-20 mb-20">
                            <div class="input-group">
                                <input class="form-control font-sm" type="text" placeholder="Enter coupon code"
                                    name="coupon_code" value="{{ old('coupon_code') }}">
                                <button type="submit" name="apply_coupon" class="btn btn-buy w-auto arrow-next">Apply</button>
                            </div>
                            @if (session('couponError'))
                                <p class="text-danger mt-1">{{ session('couponError') }}</p>
                            @endif
                        </div>

                        <div class="box-total">
                            <div class="total-price d-flex justify-content-between">
                                <h5 class="color-brand-3">Subtotal</h5>
                                <h5 class="color-brand-3">
                                    @php
                                        $price = currency($total_price, $from = null, $currency);
                                    @endphp
                                   {{$price}}
                                </h5>
                            </div>
                            <div class="total-price d-flex justify-content-between">
                                <h5 class="color-brand-3">Shipping Charges</h5>
                                <h5 class="color-brand-3">
                                    @php
                                        $price = currency($shipping_charges ?? 0, $from = null, $currency);
                                    @endphp
                                    {{$price}}
                                </h5>
                            </div>
                            @if (session('couponAmount') && session('couponAmount') > 0)
                                <div class="total-price d-flex justify-content-between">
                                    <h5 class="color-brand-3">Coupon Discount</h5>
                                    <h5 class="color-brand-3">
                                        @php
                                            $price = currency(session('couponAmount'), $from = null, $currency);
                                        @endphp
                                        -{{$price}}
                                    </h5>
                                </div>
                            @endif
                            <div class="total-price d-flex justify-content-between font-lg-bold">
                                <h5 class="color-brand-3">Total</h5>
                                <h5 class="color-brand-3">
                                    @php
                                        $price = ($final_price ?? $total_price) + ($shipping_charges ?? 0) - (session('couponAmount') ?? 0);
                                        $price = currency($price, $from = null, $currency);
                                    @endphp

                                    {{$price}}
                                </h5>
                            </div>
                        </div>

                        {{-- Payment Methods --}}
                        <div class="payment-method mt-30">
                            <h5 class="font-md-bold color-brand-3 mb-20">Payment Methods</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_gateway" id="paypal" value="Paypal"
                                    value="PayPal" {{ old('payment_method') == 'PayPal' ? 'checked' : '' }}>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_gateway" id="stripe" value="Stripe" {{ old('payment_method') == 'Stripe' ? 'checked' : '' }}>
                                <label class="form-check-label" for="stripe">Stripe</label>
                            </div>
                        </div>


                    </div>
                </div>
                </form>
            </div>
    </div>
</section>


@endsection
