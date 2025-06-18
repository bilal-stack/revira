@php
    $currency = session('currency', 'GBP');
    $price = currency($product['product_price'], $from = null, $currency);
    $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
@endphp


<div class="price-info">
    @if ($getDiscountPrice > 0)
        @php($discountPrice = currency($getDiscountPrice, $from = null, $currency))
        <strong class="font-lg-bold color-brand-3 price-main">{{$discountPrice}}</strong>
        <span class="color-gray-500 price-line">{{$price}}</span>

    @else {{-- if there's no discount on the price, show the original price --}}
    <strong class="font-lg-bold color-brand-3 price-main">{{$price}}</strong>
    @endif
</div>
