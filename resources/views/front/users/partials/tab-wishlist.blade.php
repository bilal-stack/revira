<div class="tab-pane fade active show" id="tab-wishlist" role="tabpanel" aria-labelledby="tab-wishlist">
                        <div class="box-wishlist">
                            <div class="head-wishlist">
                                <div class="item-wishlist">
                                    <div class="wishlist-product"><span class="font-md-bold color-brand-3">Product</span>
                                    </div>
                                    <div class="wishlist-price"><span class="font-md-bold color-brand-3">Price</span>
                                    </div>
                                    <div class="wishlist-action"><span class="font-md-bold color-brand-3">Action</span>
                                    </div>
                                    <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Remove</span>
                                    </div>
                                </div>
                            </div>
                            <div class="content-wishlist">
                                @foreach($wishlists as $wishlist)
                                    @php
                                        $product_image_path = 'front/images/product_images/small/' . $wishlist->item->product_image;
                                    @endphp
                                    <div class="item-wishlist">
                                        {{--                            <div class="wishlist-cb">--}}
                                        {{--                                <input class="cb-layout cb-select" type="checkbox">--}}
                                        {{--                            </div>--}}
                                        <div class="wishlist-product">
                                            <div class="product-wishlist">
                                                <div class="product-image">
                                                    <a href="{{ url('product/' . $wishlist->item->id) }}">
                                                        @if (!empty($wishlist->item->product_image) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                                                        <img src="{{ asset($product_image_path) }}" alt="Product">
                                                        @else {{-- show the dummy image --}}
                                                        <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="product-info"><a href="{{url('wishlist/'. $wishlist->item->id)}}">
                                                        <h6 class="color-brand-3">{{ $wishlist->item->product_name }}</h6>
                                                    </a>
                                                    <div class="rating">
                                                        @php
                                                            $avg = round($wishlist->item->ratings_avg_rating, 1); // average like 4.2
                                                            $fullStars = floor($avg); // e.g. 4
                                                            $halfStar = ($avg - $fullStars) >= 0.5;
                                                            $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                                        @endphp

                                                        {{-- Full Stars --}}
                                                        @for ($i = 0; $i < $fullStars; $i++)
                                                            <img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira">
                                                        @endfor

                                                        {{-- Half Star --}}
                                                        @if ($halfStar)
                                                            <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                        @endif
                                                        {{-- Empty Stars --}}
                                                        @for ($i = 0; $i < $emptyStars; $i++)
                                                            <img src="{{asset('front/new/assets/imgs/template/icons/star-gray.svg')}}" alt="Revira">
                                                        @endfor

                                                        <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $wishlist->item->ratings_count }} reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wishlist-price">
                                            @php
                                                $currency = session('currency', 'GBP');
                                                $price = currency($wishlist->item->product_price, $from = null, $currency);
                                                $getDiscountPrice = \App\Models\Product::getDiscountPrice($wishlist->item->id);
                                            @endphp

                                            @if ($getDiscountPrice > 0) {{-- If there's a discount on the price, show the price before (the original price) and after (the new price) the discount --}}
                                            @php($discountPrice = currency($getDiscountPrice, $from = null, $currency))

                                            <strong class="font-lg-bold color-brand-3 price-main">{{$discountPrice}}</strong>
                                            <span class="color-gray-500 price-line">{{$price}}</span>

                                            @else {{-- if there's no discount on the price, show the original price --}}
                                            <strong class="font-lg-bold color-brand-3 price-main">{{$price}}</strong>
                                            @endif
                                        </div>
                                        <div class="wishlist-action">
                                            <a class="btn btn-cart font-sm-bold" href="{{ url('product/' . $wishlist->item->id) }}">Add to Cart</a>
                                        </div>
                                        <div class="wishlist-remove"><a class="btn btn-delete" href="{{url('wishlist/remove/'. $wishlist->id)}}"></a></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
