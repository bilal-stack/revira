{{-- This page is rendered by contact() method inside Front/CmsController.php --}}
@extends('front.layout.layout')


@section('content')
    <div class="section-box">
        <div class="breadcrumbs-div mb-0">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="section-box shop-template mt-0">
        <div class="container">
            <div class="box-contact">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h3 class="color-brand-3 mt-60">Contact Us</h3>
                            <p class="font-sm color-gray-700 mb-30">Our team would love to hear from you!</p>

                            @if (Session::has('error_message'))
                                <!-- Check AdminController.php, updateAdminPassword() method -->
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error:</strong> {{ Session::get('error_message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    @php
                                        echo implode('', $errors->all('<div>:message</div>'));
                                    @endphp

                                </div>
                            @endif
                            <form action="{{ url('contact') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="First name"
                                                name="name" value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email" name="email"
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="tel" placeholder="Phone number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Message" rows="5" name="message">{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="btn btn-buy w-auto" type="submit" value="Send message">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325467.51371614134!2d-73.98947743776016!3d40.72209526768085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1svi!2s!4v1664373110059!5m2!1svi!2s"
                                height="550" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
{{--            <div class="box-contact-address pt-80 pb-50">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 mb-30">--}}
{{--                        <h3 class="mb-5">Visit our stores</h3>--}}
{{--                        <p class="font-sm color-gray-700 mb-30">Find us at these locations</p><a--}}
{{--                            class="btn btn-buy w-auto">View map</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Melbourne</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>San Francisco</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Byron Bay</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Sydney</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Sweden</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Ha Noi</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Bangkok</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Seoul</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="mb-30">--}}
{{--                            <h4>Paris</h4>--}}
{{--                            <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>
@endsection
