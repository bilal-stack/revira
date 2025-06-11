    @extends('front.layout.layout')
    @section('content')
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ url('/') }}">Home</a></li>
                        <li><a class="font-xs color-gray-500" href="{{ url('shop') }}">Shop</a></li>
                        <li><a class="font-xs color-gray-500" href="#">Cart</a></li>
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
                                                    @include('front.layout.currency') {{ $getDiscountAttributePrice['final_price'] }}
                                                @else
                                                    @include('front.layout.currency') {{ $getDiscountAttributePrice['final_price'] }}
                                                @endif
                                            </h4>
                                        </div>
                                        <div class="wishlist-status">
                                            <div class="box-quantity">
                                                <div class="input-quantity">
                                                    <input class="font-xl color-brand-3 quantity-text-field" type="text"  value="{{ $item['quantity'] }}">
                                                    <span class="minus-cart minus-a updateCartItem" data-cartid="{{ $item['id'] }}" data-qty="{{ $item['quantity'] }}"></span>
                                                    <span class="plus-cart plus-a updateCartItem" data-cartid="{{ $item['id'] }}" data-qty="{{ $item['quantity'] }}"></span>
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
                                                @include('front.layout.currency') {{ $getDiscountAttributePrice['final_price'] * $item['quantity'] }}
                                            </h4>
                                        </div>

                                        <div class="wishlist-remove">
                                            <a class="btn btn-delete deleteCartItem" data-cartid="{{ $item['id'] }}"></a>
                                        </div>
                                    </div>
                                    @php $total_price = $total_price + ($getDiscountAttributePrice['final_price'] * $item['quantity']) @endphp
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
                                            <form id="applyCoupon" method="post" action="javascript:void(0)" style="display:flex"
                                                  @if (\Illuminate\Support\Facades\Auth::check()) user=1 @endif>
                                            <input type="text" required class="form-control mr-15" placeholder="Enter Your Coupon" id="code" name="code" value="{{ session('coupon_code') }}">
                                            <button class="btn btn-buy w-auto" type="submit">Apply</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Buttons Continue Shopping and Update Cart --}}
                            <div class="row mb-40">
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6">
                                    <a class="btn btn-buy w-auto arrow-back mb-10" href="{{ url('shop') }}">Continue shopping</a>
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
                                        <h4 class="calc-text">@include('front.layout.currency'){{ $total_price }}</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Coupon Discount</span>
                                    </div>
                                    <div class="col-6 text-end">
                                        <h4 class="couponAmount">
                                            @if (session()->has('couponAmount'))
                                                @include('front.layout.currency'){{ number_format(session('couponAmount'), 2) }}
                                            @else
                                                @include('front.layout.currency') 0
                                            @endif
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Grand Total</span></div>
                                    <div class="col-6 text-end">
                                        <h4 class="grand_total">
                                            @include('front.layout.currency'){{ $total_price - \Illuminate\Support\Facades\Session::get('couponAmount') }}
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
            </div>
        </section>
    @endsection
