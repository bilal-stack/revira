@php
    $currency = session('currency', 'GBP');
    $money = new \Money\Money($product['product_price'], new \Money\Currency($currency));
@endphp
<div class="price-info">
    @if ($getDiscountPrice > 0)
        @php($discountPrice = new \Money\Money($getDiscountPrice, new \Money\Currency($currency)))
        <strong class="font-lg-bold color-brand-3 price-main">{{$discountPrice->getCurrency()->getCode()}} {{ $discountPrice->getAmount() }}</strong>
        <span class="color-gray-500 price-line">{{$discountPrice->getCurrency()->getCode()}} {{$money->getAmount()}}</span>

    @else {{-- if there's no discount on the price, show the original price --}}
    <strong class="font-lg-bold color-brand-3 price-main">{{$money->getCurrency()->getCode()}} {{ $money->getAmount() }}</strong>
    @endif
</div>
