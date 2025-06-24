<!-- Row-of-Product-Container -->
<div class="row mt-20">
    @foreach ($categoryProducts as $product)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 product-item">
            @php
                $product_image_path = 'front/images/product_images/small/' . $product['product_image'];
            @endphp

            <div class="card-grid-style-3">
                <div class="card-grid-inner">
                    <div class="tools">
                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{url('wishlist/'. $product['id'])}}" aria-label="Add To Wishlist"></a>
                        {{--                                        <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>--}}
                    </div>
                    <div class="image-box">
                        <span class="label bg-brand-2">-% {{$product['product_discount']}}</span>
                        <a href="{{ url('product/' . $product['id']) }}">
                            @if (!empty($product['product_image']) && file_exists($product_image_path)) {{-- if the product image exists in BOTH database table AND filesystem (on server) --}}
                            <img src="{{ asset($product_image_path) }}" alt="Product">
                            @else {{-- show the dummy image --}}
                            <img src="{{ asset('front/images/product_images/small/no-image.png') }}" alt="Product">
                            @endif
                        </a>
                    </div>
                    <div class="info-right"><span class="font-xs color-gray-500">{{ $product['brand']['name'] ?? $product['product_code'] }}</span>
                        <br>
                        <a class="color-brand-3 font-sm-bold" href="{{ url('product/' . $product['id']) }}">{{ $product['product_name'] }}</a>
                        <div class="rating">
                            @php
                                $avg = round($product['ratings_avg_rating'], 1); // average like 4.2
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

                            <span class="font-xs color-gray-500">({{ number_format($avg, 1) }}/5) {{ $product['ratings_count'] }} reviews</span>
                        </div>
                        @php
                            $getDiscountPrice = \App\Models\Product::getDiscountPrice($product['id']);
                        @endphp
                        @include('front.layout.price')
{{--                        <p class="list-features">--}}
{{--                            {{ $product['description'] }}--}}
{{--                        </p>--}}
                        <div class="mt-20 box-add-cart"><a class="btn btn-cart" href="{{ url('product/' . $product['id']) }}">Add To Cart</a></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if (!isset($_REQUEST['search']))


    {{-- Fixing the Laravel Pagination problem with the Sorting Filter where sorting gets messed up with pagination). The cause of the problem is that when you click on the pagination links like for example when you go to the second page, the URL query string parameters gets the pagination page number (e.g. 'page=2') but it loses the filter query string parameter (e.g. '&sort=desc'), so we have to always append the sorting filter query string parameter to the page number query string paramter  --}}
    {{-- Appending Query String Values: https://laravel.com/docs/9.x/pagination#appending-query-string-values --}}
    @if (isset($_GET['sort'])) {{-- if there's a Sorting Filter used --}}
    <div>
        {{ $categoryProducts->appends(['sort' => $_GET['sort']])->links() }} {{-- Appending Query String Values: https://laravel.com/docs/9.x/pagination#appending-query-string-values --}} {{-- Displaying Pagination Results: https://laravel.com/docs/9.x/pagination#displaying-pagination-results --}}
    </div>
    @else
        <div>
            {{ $categoryProducts->links() }} {{-- Displaying Pagination Results: https://laravel.com/docs/9.x/pagination#displaying-pagination-results --}}
        </div>
    @endif


@endif
<!-- Row-of-Product-Container /- -->
