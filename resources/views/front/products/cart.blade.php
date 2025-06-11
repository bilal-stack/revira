@extends('front.layout.layout')
@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{ url('/') }}">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="{{ url('shop') }}">Shop</a></li>
                    <li><a class="font-xs color-gray-500" href="#">Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section-box shop-template">
        <div class="container">
            <div id="appendCartItems"> {{-- We 'include'-ed this file to allow the AJAX call in front/js/custom.js when updating orders quantities in the Cart --}}
                @include('front.products.cart_items')
            </div>


            <div class="row">
                {{-- Shipping & Coupon input from your original layout --}}
                <div class="col-lg-12">
                    <div class="row mb-50">
                    <div class="col-lg-6 col-md-6">
                        <div class="box-cart-left">
                            <h5 class="font-md-bold mb-10">Calculate Shipping</h5>
                            <span class="font-sm-bold mb-5 d-inline-block color-gray-500">Flat rate:</span>
                            <span class="font-sm-bold d-inline-block color-brand-3">5%</span>
                            <div class="form-group">
                                <select class="form-control select-style1 color-gray-700"
                                        name="shipping_country">
                                    <option value="">Select</option>
                                    @foreach($shipping as $ship)
                                        <option value="{{$ship->id}}">{{$ship->country}}</option>
                                   @endforeach
                                </select>
                            </div>
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 mb-10">--}}
{{--                                    <input class="form-control" placeholder="State / Country"--}}
{{--                                           name="shipping_state" value="{{ session('shipping_state') }}">--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 mb-10">--}}
{{--                                    <input class="form-control" placeholder="PostCode / ZIP" name="shipping_zip"--}}
{{--                                           value="{{ session('shipping_zip') }}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-6">
                        <div class="box-cart-right p-20">
                            <h5 class="font-md-bold mb-10">Apply Coupon</h5>
                            <span class="font-sm-bold mb-5 d-inline-block color-gray-500">Using A Promo
                                                Code?</span>
                            <div class="form-group d-flex">
                                <form id="applyCoupon" method="post" action="javascript:void(0)" style="display:flex"
                                      @if (\Illuminate\Support\Facades\Auth::check()) user=1 @endif>
                                    <input type="text" required class="form-control mr-15" placeholder="Enter Your Coupon" id="code" name="code" value="{{ session('coupon_code') }}">
                                    <button class="btn btn-buy w-auto" type="submit">Apply</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-12">
                    <div class="row mb-40 d-flex justify-content-between">
                        <a class="btn btn-buy w-auto arrow-back mb-10" href="{{ url('shop') }}">
                            Continue shopping
                        </a>

                        <a class="btn btn-buy w-auto arrow-next mb-10" href="{{ url('checkout') }}">
                            Proceed To Checkout
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection
