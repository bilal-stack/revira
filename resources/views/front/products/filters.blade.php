@php
    $categories = \App\Models\Category::inRandomOrder()->get();
    $productFilters = \App\Models\ProductsFilter::productFilters(); // Get all the (enabled/active) Filters
@endphp

<div class="sidebar-border mb-0">
    <div class="sidebar-head">
        <h6 class="color-gray-900">Product Categories</h6>
    </div>
    <div class="sidebar-content">
        <ul class="list-nav-arrow">
            @foreach ($categories as $category)
                <li>
                    <a href="{{ url($category->url) }}">{{ $category['category_name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="sidebar-border mb-40">
    <div class="sidebar-head">
        <h6 class="color-gray-900">Products Filter</h6>
    </div>
    <div class="sidebar-content">
        @php
        if (!str_contains($url, 'shop')) {
            $getSizes = \App\Models\ProductsFilter::getSizes($url); // get product sizes depending on the URL (to show the proper relevant 'size' filter values (whether small, medium, ... OR 64GB-4GB, 128GB-6GB, ...))    // $url is passed from the Front/ProductsController.php
            $getColors = \App\Models\ProductsFilter::getColors($url); // get product colors depending on the URL (to show the proper relevant 'color' filter values (whether small, medium, ... OR 64GB-4GB, 128GB-6GB, ...))    // $url is passed from the Front/ProductsController.php
            $getBrands = \App\Models\ProductsFilter::getBrands($url); // get product brands depending on the URL (to show the proper relevant 'brand' filter values (whether LC Waikiki, Concrete, ... OR iPhone, Xiaomi, ...))    // $url is passed from the Front/ProductsController.php
            $prices = array('0-1000', '1000-2000', '2000-5000', '5000-10000', '10000-100000');
        } else {
            $getSizes = \App\Models\ProductsFilter::getSizesWithoutCat($url); // get product sizes depending on the URL (to show the proper relevant 'size' filter values (whether small, medium, ... OR 64GB-4GB, 128GB-6GB, ...))    // $url is passed from the Front/ProductsController.php
            $getColors = \App\Models\ProductsFilter::getColorsWithoutCat($url); // get product colors depending on the URL (to show the proper relevant 'color' filter values (whether small, medium, ... OR 64GB-4GB, 128GB-6GB, ...))    // $url is passed from the Front/ProductsController.php
            $getBrands = \App\Models\ProductsFilter::getBrandsWithoutCat($url); // get product brands depending on the URL (to show the proper relevant 'brand' filter values (whether LC Waikiki, Concrete, ... OR iPhone, Xiaomi, ...))    // $url is passed from the Front/ProductsController.php
            $prices = array('0-1000', '1000-2000', '2000-5000', '5000-10000', '10000-100000');
        }

        @endphp

        <h6 class="color-gray-900 mt-20 mb-10">Sizes</h6>
        <ul class="list-checkbox">
            <form class="facet-form" action="#" method="post">
                @foreach ($getSizes as $key => $size)
                    <li>
                        <label class="cb-container" for="size{{ $key }}">
                            <input type="checkbox" class="check-box size" id="size{{ $key }}" name="size[]"
                                   value="{{ $size }}">
                            <span class="text-small">{{ $size }}</span>
                            <span class="checkmark"></span>
                        </label>
                    </li>
                @endforeach
            </form>
        </ul>

        <h6 class="color-gray-900 mt-20 mb-10">Color</h6>
        <ul class="list-color">
            @foreach ($getColors as $key => $color)
                <li>
                    <label class="cb-container" for="color{{ $key }}">
                        <input type="checkbox" class="check-box color" id="color{{ $key }}" name="color[]"
                               value="{{ $color }}">
                        <span class="text-small">{{ $color }}</span>
                        <span class="checkmark"></span>
                    </label>
                </li>
            @endforeach

        </ul>

        <h6 class="color-gray-900 mt-20 mb-10">Brands</h6>
        <ul class="list-checkbox">
            @foreach ($getBrands as $key => $brand)
                <li>
                    <label class="cb-container" for="brand{{ $key }}">
                        <input type="checkbox" class="check-box brand" id="brand{{ $key }}" name="brand[]"
                               value="{{ $brand['id'] }}"> {{-- Note!!: PLEASE NOTE THE SQUARE BRACKETS [] OF THE "name" ATTRIBUTE!! --}} {{-- echo the $brand as a 'CSS class' to be able to use it in jQuery for filtering --}} {{-- the checked checkboxes <input> fields of the brand filter values (like Concrete, Zara, ...) will be submitted as an ARRAY because we used SQUARE BRACKETS [] with the "name" HTML attribute in the checkbox <input> field in filters.blade.php, or else, AJAX is used to send the <input> values WITHOUT submitting the <form> at all --}}
                        <span class="text-small">{{ $brand['name'] }}</span>
                        <span class="checkmark"></span>
                    </label>
                </li>
            @endforeach

        </ul>

        @foreach ($productFilters as $filter)
            {{-- $productFilters comes from the far top of this file --}}
            @php
                if (isset($categoryDetails['categoryDetails']['id'])){
                    $filterAvailable = \App\Models\ProductsFilter::filterAvailable($filter['id'], $categoryDetails['categoryDetails']['id']); // $categoryDetails was passed from the listing() method in the Front/ProductsController
                } else {
                    $filterAvailable = \App\Models\ProductsFilter::filterAvailableWithoutCat($filter['id']); // $categoryDetails was passed from the listing() method in the Front/ProductsController
                }
                    // Firstly, for every filter in the `products_filters` table, Get the filter's (from the foreach loop) `cat_ids` using filterAvailable() method, then check if the current category id (using the $categoryDetails variable and depending on the URL) exists in the filter's `cat_ids`. If it exists, then show the filter, if not, then don't show the filter
            @endphp
            @if ($filterAvailable == 'Yes' && count($filter['filter_values']) > 0)
                <h6 class="color-gray-900 mt-20 mb-10 title-name">{{ $filter['filter_name'] }}</h6>
                <ul class="list-checkbox">
                    <form class="facet-form" action="#" method="post">
                        @foreach ($filter['filter_values'] as $value)
                            <li>
                                <label class="cb-container" for="{{ $value['filter_value'] }}">
                                    <input type="checkbox" class="check-box {{ $filter['filter_column'] }}"
                                           id="{{$value['filter_value']}}" name="{{ $filter['filter_column'] }}[]"
                                           value="{{ $value['filter_value'] }}"> {{-- Note!!: PLEASE NOTE THE SQUARE BRACKETS [] OF THE "name" ATTRIBUTE!! --}} {{-- echo the $brand as a 'CSS class' to be able to use it in jQuery for filtering --}} {{-- the checked checkboxes <input> fields of the brand filter values (like Concrete, Zara, ...) will be submitted as an ARRAY because we used SQUARE BRACKETS [] with the "name" HTML attribute in the checkbox <input> field in filters.blade.php, or else, AJAX is used to send the <input> values WITHOUT submitting the <form> at all --}}
                                    <span class="text-small">{{ ucwords($value['filter_value']) }}</span>
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        @endforeach
                    </form>

                </ul>
            @endif
        @endforeach

        <h6 class="color-gray-900 mt-10 mb-10">Price</h6>
        {{--        <div class="box-slider-range mt-20 mb-15">--}}
        {{--            <div class="row mb-20">--}}
        {{--                <div class="col-sm-12">--}}
        {{--                    <div id="slider-range"></div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-lg-12">--}}
        {{--                    <label class="lb-slider font-sm color-gray-500">Price Range:</label>--}}
        {{--                    <span class="min-value-money font-sm color-gray-1000"></span>--}}
        {{--                    <label class="lb-slider font-sm font-medium color-gray-1000"></label>--}}
        {{--                    -<span class="max-value-money font-sm font-medium color-gray-1000"></span>--}}
        {{--                </div>--}}
        {{--                <div class="col-lg-12">--}}
        {{--                    <input class="form-control min-value" type="hidden" name="min-value" value="">--}}
        {{--                    <input class="form-control max-value" type="hidden" name="max-value" value="">--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <ul class="list-checkbox">
            @foreach ($prices as $key => $price)
                <li>
                    <label class="cb-container" for="price{{ $key }}">
                        <input type="checkbox" class="check-box price" id="price{{ $key }}" name="price[]"
                               value="{{ $price }}"> {{-- Note!!: PLEASE NOTE THE SQUARE BRACKETS [] OF THE "name" ATTRIBUTE!! --}} {{-- echo the $price as a 'CSS class' to be able to use it in jQuery for filtering --}} {{-- the checked checkboxes <input> fields of the price filter values (like '1000-2000', '2000-5000', ...) will be submitted as an ARRAY because we used SQUARE BRACKETS [] with the "name" HTML attribute in the checkbox <input> field in filters.blade.php, or else, AJAX is used to send the <input> values WITHOUT submitting the <form> at all --}}
                        <span class="text-small">{{ $price }}</span>
                        <span class="checkmark"></span>
                    </label>
                </li>
            @endforeach
        </ul>

    </div>
</div>
