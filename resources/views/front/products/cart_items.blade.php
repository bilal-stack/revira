@php
    $currency = session('currency', 'GBP')
@endphp
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
                                        <span class="font-xs color-gray-500">({{ $item['product']['rating'] ?? '0' }})</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wishlist-price">
                            <h4 class="color-brand-3">

                                @php
                                    $discountPrice = currency($getDiscountAttributePrice['final_price'], $from = null, $currency)
                                @endphp
                                {{$discountPrice}}
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
                                @php
                                    $price = $getDiscountAttributePrice['final_price'] * $item['quantity'];
                                    $price = currency($price, $from = null, $currency)
                            @endphp
                                {{$price}}
                            </h4>
                        </div>

                        <div class="wishlist-remove">
                            <a class="btn btn-delete deleteCartItem" data-cartid="{{ $item['id'] }}"></a>
                        </div>
                    </div>
                    @php $total_price = $total_price + ($getDiscountAttributePrice['final_price'] * $item['quantity']) @endphp
                @endforeach
            </div>

            {{-- Buttons Continue Shopping and Update Cart --}}

        </div>
    </div>

    <div class="col-lg-3">
        <div class="summary-cart">
            <div class="border-bottom mb-10">
                <div class="row">
                    <div class="col-6"><span class="font-md-bold color-gray-500">Subtotal</span></div>
                    <div class="col-6 text-end">
                        <h4 class="calc-text">
                            @php
                                $grand_price = currency($total_price, $from = null, $currency)
                            @endphp
                            {{ $grand_price }}
                        </h4>
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
                                {{ number_format(session('couponAmount'), 2) }}
                            @else
                                0
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
                            @php
                                $total_price = $total_price - \Illuminate\Support\Facades\Session::get('couponAmount');

                                $currency = session('currency', 'GBP');
                                $price = currency($total_price, $from = null, $currency);
                            @endphp

                            {{ $price}}
                        </h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
