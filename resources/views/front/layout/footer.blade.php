<!-- Footer -->
<section class="section-box mt-90 mb-50">
    <div class="container">
        <ul class="list-col-5">
            <li>
                <div class="item-list">
                    <div class="icon-left"><img src="{{asset('front/new/assets/imgs/template/delivery.svg')}}" alt="Revira"></div>
                    <div class="info-right">
                        <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                        <p class="font-sm color-gray-500">From all orders over $10</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-list">
                    <div class="icon-left"><img src="{{asset('front/new/assets/imgs/template/support.svg')}}" alt="Revira"></div>
                    <div class="info-right">
                        <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                        <p class="font-sm color-gray-500">Shop with an expert</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-list">
                    <div class="icon-left"><img src="{{asset('front/new/assets/imgs/template/voucher.svg')}}" alt="Revira"></div>
                    <div class="info-right">
                        <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                        <p class="font-sm color-gray-500">Refer a friend</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-list">
                    <div class="icon-left"><img src="{{asset('front/new/assets/imgs/template/return.svg')}}" alt="Revira"></div>
                    <div class="info-right">
                        <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                        <p class="font-sm color-gray-500">Free return over $200</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="item-list">
                    <div class="icon-left"><img src="{{asset('front/new/assets/imgs/template/secure.svg')}}" alt="Revira"></div>
                    <div class="info-right">
                        <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                        <p class="font-sm color-gray-500">100% Protected</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<section class="section-box box-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
                <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
                <p class="font-lg color-white">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
                <div class="box-form-newsletter mt-15">
                    <form class="form-newsletter newsletter-form">
                        <input class="input-newsletter font-xs" value="" placeholder="Your email Address" id="subscriber_email" name="subscriber_email" required>
                        <button class="btn btn-brand-2" type="button" onclick="addSubscriber()">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="footer-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 width-35 mb-30">
                    <h4 class="mb-30 color-gray-1000">Contact</h4>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Address:</strong> 502 New Design Str, Melbourne, San Francisco, CA 94110, United States</div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Phone:</strong> (+01) 123-456-789</div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong> contact@Revira-market.com</div>
                    <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Hours:</strong> 8:00 - 17:00, Mon - Sat</div>
                    <div class="mt-30"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
                </div>
{{--                <div class="col-lg-3 width-20 mb-30">--}}
{{--                    <h4 class="mb-30 color-gray-1000">Make Money with Us</h4>--}}
{{--                    <ul class="menu-footer">--}}
{{--                        <li><a href="{{url('about-us')}}">Mission &amp; Vision</a></li>--}}
{{--                        <li><a href="{{url('about-us')}}">Our Team</a></li>--}}
{{--                        <li><a href="{{url('careers')}}">Careers</a></li>--}}
{{--                        <li><a href="#">Press &amp; Media</a></li>--}}
{{--                        <li><a href="#">Advertising</a></li>--}}
{{--                        <li><a href="#">Testimonials</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 width-16 mb-30">--}}
{{--                    <h4 class="mb-30 color-gray-1000">Company</h4>--}}
{{--                    <ul class="menu-footer">--}}
{{--                        <li><a href="{{url('blogs')}}">Our Blog</a></li>--}}
{{--                        <li><a href="#">Plans &amp; Pricing</a></li>--}}
{{--                        <li><a href="#">Knowledge Base</a></li>--}}
{{--                        <li><a href="#">Cookie Policy</a></li>--}}
{{--                        <li><a href="#">Office Center</a></li>--}}
{{--                        <li><a href="{{url('events')}}">News &amp; Events</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class="col-lg-4 width-25 mb-30">
                    <h4 class="mb-30 color-gray-1000">Navigation</h4>
                    <ul class="menu-footer">
                        <li><a href="{{url('faqs')}}">FAQs</a></li>
                        <li><a href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('terms-and-conditions')}}">Privacy Policy</a></li>
                        <li><a href="{{url('about-us')}}">About Us</a></li>
                        <li><a href="{{url('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 width-23">
                    <h4 class="mb-30 color-gray-1000">Secured Payments</h4>
                    <div>
{{--                        <p class="font-md color-gray-900">Download our Apps and get extra 15% Discount on your first Order&mldr;!</p>--}}
{{--                        <div class="mt-20"><a class="mr-10" href="#">--}}
{{--                                <img src="{{asset('front/new/assets/imgs/template/appstore.png')}}" alt="Revira">--}}
{{--                            </a>--}}
{{--                            <a href="#"><img src="{{asset('front/new/assets/imgs/template/google-play.png')}}" alt="Revira"></a>--}}
{{--                        </div>--}}
                        <img src="{{asset('front/new/assets/imgs/template/payment-method.png')}}" alt="Revira">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-2">
        <div class="container">
            <div class="footer-bottom mt-20">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center text-lg-start"><span class="color-gray-900 font-sm">Copyright &copy; 2025 Revira. All rights reserved.</span></div>
                    <div class="col-lg-6 col-md-12 text-center text-lg-end">
                        <ul class="menu-bottom">
                            <li><a class="font-sm color-gray-900" href="{{url('terms-and-conditions')}}">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer /- -->
