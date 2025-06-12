@extends('front.layout.layout')
@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="#">Vendor listing</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section-box shop-template mt-0">
        <div class="container">
            <h2>Vendors Listing</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-30">
{{--                    <p class="font-md color-gray-500">We have<span class="font-md-bold color-brand-3"> 780</span><span>--}}
{{--                            vendors now</span></p>--}}
                </div>
                <div class="col-lg-6 mb-30 text-end">
{{--                    <a class="font-sm color-gray-900 mr-30" href="#">Support--}}
{{--                        Ticket</a>--}}
{{--                    <a class="font-sm color-gray-900 mr-30" href="#">BRevirae an Affilate</a>--}}
                    <a class="btn btn-buy w-auto font-sm-bold" href="{{ url('vendor/login-register') }}">Open a Shop</a></div>
            </div>
            <div class="border-bottom pt-0 mb-30"></div>
            <div class="row">
                <div class="col-lg-12 order-first order-lg-last">
{{--                    <div class="box-filters mt-0 pb-5 border-bottom">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-xl-2 col-lg-3 mb-10 text-lg-start text-center"><a--}}
{{--                                    class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm"--}}
{{--                                    data-bs-toggle="modal">All Fillters</a></div>--}}
{{--                            <div class="col-xl-10 col-lg-9 mb-10 text-lg-end text-center"><span--}}
{{--                                    class="font-sm color-gray-900 font-medium border-1-right span">Showing 1&ndash;16 of 17--}}
{{--                                    results</span>--}}
{{--                                <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort by:</span>--}}
{{--                                    <div class="dropdown dropdown-sort border-1-right">--}}
{{--                                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"--}}
{{--                                            id="dropdownSort" type="button" data-bs-toggle="dropdown"--}}
{{--                                            aria-expanded="false">Latest added</button>--}}
{{--                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort"--}}
{{--                                            style="margin: 0px;">--}}
{{--                                            <li><a class="dropdown-item active" href="#">Latest added</a></li>--}}
{{--                                            <li><a class="dropdown-item" href="#">Oldest added</a></li>--}}
{{--                                            <li><a class="dropdown-item" href="#">Comments added</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Show</span>--}}
{{--                                    <div class="dropdown dropdown-sort border-1-right">--}}
{{--                                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium"--}}
{{--                                            id="dropdownSort2" type="button" data-bs-toggle="dropdown"--}}
{{--                                            aria-expanded="false" data-bs-display="static"><span>30 items</span></button>--}}
{{--                                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort2">--}}
{{--                                            <li><a class="dropdown-item active" href="#">30 items</a></li>--}}
{{--                                            <li><a class="dropdown-item" href="#">50 items</a></li>--}}
{{--                                            <li><a class="dropdown-item" href="#">100 items</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-inline-block"><a class="view-type-grid mr-5 active"--}}
{{--                                        href="{{url('shop-vendor-list')}}"></a><a class="view-type-list" href="#"></a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row mt-20">
                        @foreach ($vendors as $vendor)
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card-vendor">
                                    <div class="card-top-vendor">
                                        <div class="card-top-vendor-left">
                                            @if(!empty($vendor->vendorbusinessdetails->shop_image))
                                                <img src="{{ url('admin/images/photos/' . $vendor->vendorbusinessdetails->shop_image) }}" alt="{{ $vendor->vendorbusinessdetails->shop_name }}">
                                                @else
                                                <img src="{{asset('front/images/store-default.png')}}" alt="{{ $vendor->vendorbusinessdetails->shop_name }}">
                                            @endif
                                        </div>
                                        <div class="card-top-vendor-right">
                                            <p class="font-sm color-gray-500">{{ $vendor->vendorbusinessdetails->shop_name }}</p>

                                            <p class="font-xs color-gray-500 mt-10">Member since {{ \Carbon\Carbon::parse($vendor->created_at)->format('F Y') }}</p>
                                        </div>
                                    </div>
                                    <div class="card-bottom-vendor">
                                        <p class="font-sm color-gray-500 location mb-10">{{ $vendor->vendorbusinessdetails->shop_country }} </p>

                                        <p class="font-sm color-gray-500 phone"><a class="btn btn-gray" href="{{url('chat/'. $vendor->username)}}">Message</a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <nav>
                        {{$vendors->links()}}
{{--                        <ul class="pagination">--}}
{{--                            <li class="page-item"><a class="page-link page-prev" href="#"></a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link active" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">6</a></li>--}}
{{--                            <li class="page-item"><a class="page-link page-next" href="#"></a></li>--}}
{{--                        </ul>--}}
                    </nav>
                </div>

            </div>
        </div>
    </section>
@endsection
