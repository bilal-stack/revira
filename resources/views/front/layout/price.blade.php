@php
    $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
    //dd($product);
    $perPrice = round($getDiscountPrice / $product['quantity'], 2);
    $currency = session('currency', 'GBP');
    $price = currency($product['product_price'], $from = null, $currency);

@endphp


<div class="price-info">
    @if ($getDiscountPrice > 0)
        @php($discountPrice = currency($getDiscountPrice, $from = null, $currency))
        <strong class="font-lg-bold color-brand-3 price-main">{{$perPrice}}/pc ({{$discountPrice}})</strong>
        <span class="color-gray-500 price-line">{{$price}}</span>

    @else {{-- if there's no discount on the price, show the original price --}}
    <strong class="font-lg-bold color-brand-3 price-main">{{$perPrice}}/pc ({{$price}})</strong>
    @endif
</div>
