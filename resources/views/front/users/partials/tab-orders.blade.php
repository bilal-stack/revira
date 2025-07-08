<div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders">
    @foreach($orders as $order)
        <div class="box-orders">
            <div class="head-orders">
                <div class="head-left">
                    <h5 class="mr-20">Order ID: {{$order['order_number']}}</h5>
                    @php($date = \Carbon\Carbon::parse($order['created_at']))

                    <span class="font-md color-brand-3 mr-20">Date: {{$date->format('d F Y')}}</span>
                    <span class="label-delivery">{{$order['order_status']}}</span>
                </div>
                {{--                                    <div class="head-right"><a class="btn btn-buy font-sm-bold w-auto">View Order</a></div>--}}
            </div>
            <div class="body-orders">
                <div class="list-orders">
                    @foreach($order['orders_products'] as $product)
                        <div class="item-orders">
                            <div class="image-orders">
                                @php($getProductImage = \App\Models\Product::getProductImage($product['product_id']))
                                <a target="_blank" href="{{ url('product/' . $product['product_id']) }}">
                                    <img src="{{ asset('front/images/product_images/small/' . $getProductImage) }}" alt="">
                                </a>
                            </div>
                            <div class="info-orders">
                                <a target="_blank" href="{{ url('product/' . $product['product_id']) }}">
                                    <h5>{{ $product['product_name'] }}</h5>
                                </a>

                            </div>
                            <div class="quantity-orders">
                                <h5>Quantity: {{ $product['product_qty'] }}</h5>
                            </div>
                            <div class="price-orders">
                                @php($currency = session('currency', 'GBP'))
                                @php($price = currency($product['product_price'], $from = null, $currency))
                                <h3>{{ $price }}</h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endforeach

    <nav>
        {!! $links !!}
    </nav>
</div>
