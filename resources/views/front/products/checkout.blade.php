{{-- Note: This page (view) is rendered by the checkout() method in the Front/ProductsController.php --}}
@extends('front.layout.layout')


@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="{{url('shop-grid')}}">Shop</a></li>
                    <li><a class="font-xs color-gray-500" href="{{url('shop-cart')}}">Checkout</a></li>
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
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        @endif

        <div class="row">
            <div class="col-lg-6">
                <div class="box-border">
                    <div class="box-payment">
                        <a class="btn btn-gpay"><img src="assets/imgs/page/checkout/gpay.svg" alt="Google Pay"></a>
                        <a class="btn btn-paypal"><img src="assets/imgs/page/checkout/paypal.svg" alt="PayPal"></a>
                        <a class="btn btn-amazon"><img src="assets/imgs/page/checkout/amazon.svg" alt="Amazon Pay"></a>
                    </div>

                    <div class="border-bottom-4 text-center mb-20">
                        <div class="text-or font-md color-gray-500">Or</div>
                    </div>

                    <div class="row">
                        {{-- Contact Information --}}
                        <div class="col-lg-6 col-sm-6 mb-20">
                            <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Contact information</h5>
                        </div>
                        <div class="col-lg-6 col-sm-6 mb-20 text-sm-end text-center">
                            <span class="font-sm color-brand-3">Already have an account?</span>
                            <a class="font-sm color-brand-1" href="page-login.php"> Login</a>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="Email*" name="email"
                                    value="{{ old('email', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="font-sm color-brand-3" for="checkboxOffers">
                                    <input class="checkboxOffer" id="checkboxOffers" type="checkbox" name="offers"
                                        {{ old('offers') ? 'checked' : '' }}>Keep me up to date
                                    on news and exclusive offers
                                </label>
                            </div>
                        </div>

                        {{-- Shipping Addresses --}}
                        <div class="col-lg-12">
                            <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Shipping address</h5>
                        </div>

                        @if (!empty($deliveryAddresses) && count($deliveryAddresses) > 0)
                            @foreach ($deliveryAddresses as $address)
                                <div class="col-lg-12 mb-15">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="address_id"
                                            id="address{{ $address['id'] }}" value="{{ $address['id'] }}"
                                            shipping_charges="{{ $address['shipping_charges'] ?? 0 }}"
                                            total_price="{{ $total_price ?? 0 }}"
                                            coupon_amount="{{ session('couponAmount', 0) }}"
                                            codpincodeCount="{{ $address['codpincodeCount'] ?? 0 }}"
                                            prepaidpincodeCount="{{ $address['prepaidpincodeCount'] ?? 0 }}"
                                            {{ old('address_id') == $address['id'] ? 'checked' : '' }}>
                                        <label class="form-check-label font-sm" for="address{{ $address['id'] }}">
                                            {{ $address['name'] }}, {{ $address['address'] }},
                                            {{ $address['city'] }}, {{ $address['state'] }},
                                            {{ $address['country'] }} ({{ $address['mobile'] }})
                                        </label>
                                        <a href="javascript:;" data-addressid="{{ $address['id'] }}"
                                            class="editAddress" style="margin-left:10px;">Edit</a>
                                        <a href="javascript:;" data-addressid="{{ $address['id'] }}"
                                            class="removeAddress" style="margin-left:10px;">Remove</a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-lg-12 mb-15">
                                <p>No saved shipping addresses found. Please fill out your shipping details below.</p>
                            </div>
                        @endif

                        {{-- Shipping form --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="First name*"
                                    name="first_name" value="{{ old('first_name', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="Last name*"
                                    name="last_name" value="{{ old('last_name', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="Address 1*"
                                    name="address_1" value="{{ old('address_1', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="Address 2"
                                    name="address_2" value="{{ old('address_2', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select class="form-control font-sm select-style1 color-gray-700" name="country">
                                    <option value="">Select an option...</option>
                                    <option value="1" {{ old('country') == 1 ? 'selected' : '' }}>Option 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="City*"
                                    name="city" value="{{ old('city', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="PostCode / ZIP*"
                                    name="postcode" value="{{ old('postcode', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="Company name"
                                    name="company" value="{{ old('company', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control font-sm" type="text" placeholder="Phone*"
                                    name="phone" value="{{ old('phone', '') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <textarea class="form-control font-sm" placeholder="Additional Information" rows="5" name="additional_info">{{ old('additional_info', '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-20">
                    <div class="col-lg-6 col-5 mb-20">
                        <a class="btn font-sm-bold color-brand-1 arrow-back-1" href="{{url('shop-grid')}}">Return to Cart</a>
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
                                                <div class="rating">
                                                    <img src="assets/imgs/template/icons/star.svg" alt="star">
                                                    <img src="assets/imgs/template/icons/star.svg" alt="star">
                                                    <img src="assets/imgs/template/icons/star.svg" alt="star">
                                                    <img src="assets/imgs/template/icons/star.svg" alt="star">
                                                    <img src="assets/imgs/template/icons/star.svg" alt="star">
                                                    <span class="font-xs color-gray-500"> (65)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wishlist-status">
                                        <h5 class="color-gray-500">x{{ $item['quantity'] }}</h5>
                                    </div>
                                    <div class="wishlist-price">
                                        <h4 class="color-brand-3 font-lg-bold">
                                            ${{ number_format($discountPrice * $item['quantity'], 2) }}
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
                            <h5 class="color-brand-3">${{ number_format($total_price, 2) }}</h5>
                        </div>
                        <div class="total-price d-flex justify-content-between">
                            <h5 class="color-brand-3">Shipping Charges</h5>
                            <h5 class="color-brand-3">${{ number_format($shipping_charges ?? 0, 2) }}</h5>
                        </div>
                        @if (session('couponAmount') && session('couponAmount') > 0)
                            <div class="total-price d-flex justify-content-between">
                                <h5 class="color-brand-3">Coupon Discount</h5>
                                <h5 class="color-brand-3">- ${{ number_format(session('couponAmount'), 2) }}</h5>
                            </div>
                        @endif
                        <div class="total-price d-flex justify-content-between font-lg-bold">
                            <h5 class="color-brand-3">Total</h5>
                            <h5 class="color-brand-3">
                                ${{ number_format(($final_price ?? $total_price) + ($shipping_charges ?? 0) - (session('couponAmount') ?? 0), 2) }}
                            </h5>
                        </div>
                    </div>

                    {{-- Payment Methods --}}
                    <div class="payment-method mt-30">
                        <h5 class="font-md-bold color-brand-3 mb-20">Payment Methods</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentCOD"
                                value="COD" {{ old('payment_method') == 'COD' ? 'checked' : '' }}>
                            <label class="form-check-label" for="paymentCOD">Cash on Delivery</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentPaypal"
                                value="PayPal" {{ old('payment_method') == 'PayPal' ? 'checked' : '' }}>
                            <label class="form-check-label" for="paymentPaypal">PayPal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment_method" id="paymentStripe"
                                value="Stripe" {{ old('payment_method') == 'Stripe' ? 'checked' : '' }}>
                            <label class="form-check-label" for="paymentStripe">Stripe</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
