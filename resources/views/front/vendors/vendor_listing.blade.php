@extends('front.layout.layout')
@section('content')

    <section class="section-box shop-template mt-30">
        <div class="container">
            <div class="d-flex box-banner-vendor">

                <div class="vendor-left mt-55 mb-50">
                    <div class="banner-vendor">

                        <div class="d-flex box-info-vendor">
                            <div class="avarta">
                                @if(!empty($vendor->vendorbusinessdetails->shop_image))
                                    <img class="mb-5" src="{{ url('admin/images/photos/' . $vendor->vendorbusinessdetails->shop_image) }}" alt="{{ $vendor->vendorbusinessdetails->shop_name }}">
                                @else
                                    <img class="mb-5" src="{{asset('front/images/store-default.png')}}" alt="{{ $vendor->vendorbusinessdetails->shop_name }}">
                                @endif
                            </div>
                            <div class="info-vendor">
                                <h4 class="mb-5">{{$vendor->vendorbusinessdetails->shop_name}}</h4>
                                <span class="font-xs color-gray-500 mr-20">Member since {{ \Carbon\Carbon::parse($vendor->created_at)->format('F Y') }}</span>
                                <div class="col-xl-7 col-lg-12">
                                    <div class="d-inline-block font-md color-gray-500 location mb-10">{{ $vendor->vendorbusinessdetails->shop_country }}</div>
                                </div>
                            </div>
                            <div class="vendor-contact">
                                <div class="row">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-bottom mb-20 border-vendor"></div>

            <div class="section-box shop-template mt-30">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-9 order-first order-lg-last">
                            <div class="box-filters mt-0 pb-5 border-bottom">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center">
                                    </div>
                                    <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center">
                                <span class="font-sm color-gray-900 font-medium border-1-right span">
                                    Showing: {{ count($categoryProducts) }}
                                </span>

                                        {{--                                <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>--}}
                                        {{--                                    <div class="dropdown dropdown-sort border-1-right">--}}
                                        {{--                                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"--}}
                                        {{--                                                id="dropdownSort2" type="button" data-bs-toggle="dropdown"--}}
                                        {{--                                                aria-expanded="false" data-bs-display="static"><span>30--}}
                                        {{--                                                items</span></button>--}}
                                        {{--                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">--}}
                                        {{--                                            <li><a class="dropdown-item active" href="#">30 items</a></li>--}}
                                        {{--                                            <li><a class="dropdown-item" href="#">50 items</a></li>--}}
                                        {{--                                            <li><a class="dropdown-item" href="#">100 items</a></li>--}}
                                        {{--                                        </ul>--}}
                                        {{--                                    </div>--}}
                                        {{--                                </div>--}}

                                        <div class="d-inline-block">
                                            <form name="sortProducts" id="sortProducts">
                                                <input type="hidden" name="url" id="url" value="{{ $vendor->shop_name }}">
                                                <span class="font-sm color-gray-500 font-medium">Sort by:</span>
                                                <div class="dropdown dropdown-sort">
                                                    <select name="sort" id="sort" class="form-control select-box">
                                                        {{-- <option selected="selected" value="">Sort By: Best Selling</option> --}}
                                                        <option value="" selected>Select</option>
                                                        <option value="product_latest" @if(isset($_GET['sort']) && $_GET['sort'] == 'product_latest') selected @endif>Sort By: Latest</option>
                                                        <option value="price_lowest"   @if(isset($_GET['sort']) && $_GET['sort'] == 'price_lowest')   selected @endif>Sort By: Lowest Price</option>
                                                        <option value="price_highest"  @if(isset($_GET['sort']) && $_GET['sort'] == 'price_highest')  selected @endif>Sort By: Highest Price</option>
                                                        <option value="name_a_z"       @if(isset($_GET['sort']) && $_GET['sort'] == 'name_a_z')       selected @endif>Sort By: Name A - Z</option>
                                                        <option value="name_z_a"       @if(isset($_GET['sort']) && $_GET['sort'] == 'name_z_a')       selected @endif>Sort By: Name Z - A</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="filter_products">
                                @include('front.vendors.ajax_vendor_products_listing')
                            </div>
                        </div>

                        <div class="col-lg-3 order-last order-lg-first">
                            @include('front.vendors.filters')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    @include('front.layout.scripts')
@stop
