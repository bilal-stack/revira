{{-- This file is 'include'-ed in front/layout/header.php. We separated the Mini Cart widget and cut it from front/layout/header.blade.php to here --}}

@php $total_price = 0 @endphp

@php
    $getCartItems = getCartItems(); // getCartItems() function is in our custom Helpers/Helper.php file that we have registered in 'composer.json' file --}}
    $countCartItems = count($getCartItems);
@endphp


<div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-cart"><span>Cart</span><span class="number-item font-xs">{{$countCartItems}}</span></span>
    <div class="dropdown-cart">
        @foreach ($getCartItems as $item) {{-- $getCartItems is passed in from cart() method in Front/ProductsController.php --}}
        @php

            $getDiscountAttributePrice = \App\Models\Product::getDiscountAttributePrice($item['product_id'], $item['size']);
            @endphp
        <div class="item-cart mb-20">
            <div class="cart-image">
                <img src="{{ asset('front/images/product_images/small/' . $item['product']['product_image']) }}" alt="{{ $item['product']['product_name'] }}">
            </div>
            <div class="cart-info">
                <a class="font-sm-bold color-brand-3" href="s{{ url('product/' . $item['product_id']) }}">{{ $item['product']['product_name'] }}</a>
                <p><span class="color-brand-2 font-sm-bold">
                        @php
                            $currency = session('currency', 'GBP');
                            $price = currency($getDiscountAttributePrice['final_price'], $from = null, $currency);
                        @endphp
                        {{ $item['quantity'] }} x {{$price}}
                    </span></p>
            </div>
        </div>
        {{-- This is placed here INSIDE the foreach loop to calculate the total price of all products in Cart --}}
        @php $total_price = $total_price + ($getDiscountAttributePrice['final_price'] * $item['quantity']) @endphp
        @endforeach



        <div class="border-bottom pt-0 mb-15"></div>
        <div class="cart-total">
            <div class="row">
                <div class="col-6 text-start"><span class="font-md-bold color-brand-3">Total</span></div>
                <div class="col-6"><span class="font-md-bold color-brand-1">
                        @php
                            $currency = session('currency', 'GBP');
                            $price = currency($total_price, $from = null, $currency);
                        @endphp
                        {{$price}}
                    </span></div>
            </div>
            <div class="row mt-15">
                <div class="col-6 text-start"><a class="btn btn-cart w-auto" href="{{ url('cart') }}">View cart</a></div>
                <div class="col-6"><a class="btn btn-buy w-auto" href="{{ url('checkout') }}">Checkout</a></div>
            </div>
        </div>
    </div>
</div>
