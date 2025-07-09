{{-- This page is rendered by index() method in Front/IndexController.php --}}
@extends('front.layout.layout')
@section('content')
<div class="section-box">
        <div class="breadcrumbs-div">
          <div class="container">
            <ul class="breadcrumb">
              <li><a class="font-xs color-gray-1000" href="{{url('/')}}">Home</a></li>
              <li><a class="font-xs color-gray-500" href="#">About Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section-box shop-template mt-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h5 class="color-gray-500 mb-10">About us</h5>
              <h2>About Revira</h2>
              <div class="row mt-20">
                <div class="col-lg-6">
                  <p class="font-sm font-medium color-gray-700 mb-15">Revira is a global clothing platform designed to connect vendors and retailers from around the world. Our mission is to simplify the way businesses source, buy, and sell high-quality fashion products through one reliable, easy-to-use website.</p>
                  <p class="font-sm font-medium color-gray-700 mb-15">We partner with trusted wholesalers, manufacturers, and suppliers, offering retailers a wide selection of clothing bundles to meet the demands of their customers. From everyday essentials to seasonal trends, Revira brings together a diverse range of styles and collections under one digital roof.</p>
                  <p class="font-sm font-medium color-gray-700 mb-15">Our platform is built on strong relationships, transparent service, and a commitment to making global trade seamless and accessible. With secure transactions, worldwide shipping, and continuous order tracking, we ensure every business gets the support it needs to grow.</p>
                  <p class="font-sm font-medium color-gray-700 mb-15">At Revira, we don’t just move products — we build connections, open opportunities, and help fashion businesses thrive in today’s fast-paced market.</p>
                    <ul class="list-services mt-20">
                    <li class="hover-up">We provide qualified products</li>
                    <li class="hover-up">Modern Designs & F use</li>
                    <li class="hover-up">Neat & cleaning top Services</li>
                    <li class="hover-up">We Develop Digital Future</li>
                  </ul>
                </div>
                <div class="col-lg-6"><img src="{{asset('front/new/assets/imgs/page/about/img.png')}}" alt="Revira"></div>
              </div>


{{--              <h5 class="color-gray-500 mb-10">Behind The Brands</h5>--}}
{{--              <h2 class="mb-40">The people who work at Revira share the vision and values of our community.</h2>--}}
{{--              <div class="row mb-50">--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft1.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Ronald Richards</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Executive Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft2.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Jenny Wilson</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Financial Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft3.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Cody Fisher</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Operating Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft4.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Jacob Jones</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Technology Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft5.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Leslie Alexander</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Marketing Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft6.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Ralph Edwards</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Human Resources Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft7.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Eleanor Pena</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Legal Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 col-sm-6 col-12">--}}
{{--                  <div class="card-staff hover-up">--}}
{{--                    <div class="image-staff"><img src="assets/imgs/page/about/staft8.png" alt="Revira"></div>--}}
{{--                    <div class="info-staff">--}}
{{--                      <h5>Theresa Webb</h5>--}}
{{--                      <p class="font-md color-gray-500">Chief Product Officer</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}

{{--              <h2 class="mb-5">Visit our stores</h2>--}}
{{--              <p class="font-sm color-gray-700">Find us at these locations</p>--}}
{{--              <div class="box-contact-address pt-30 pb-50">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-lg-4">--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Melbourne</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>San Francisco</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Byron Bay</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-lg-4">--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Sydney</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Sweden</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Ha Noi</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-lg-4">--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Bangkok</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Seoul</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                    <div class="mb-30">--}}
{{--                      <h4>Paris</h4>--}}
{{--                      <p class="font-sm color-gray-700">205 North Michigan Avenue, Suite 810<br>Chicago, 60601, USA</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}

            </div>
          </div>
        </div>
        <div class="box-contact-support pt-80 pb-50 ">
          <div class="container">
            <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-10">
                <div class="row">
                  <div class="col-lg-6 mb-30 text-center text-lg-start">
                    <h3 class="mb-5">We‘d love to here from you</h3>
                    <p class="font-sm color-gray-700">Chat with our friendly team</p>
                  </div>
                  <div class="col-lg-3 text-center mb-30">
                    <div class="box-image mb-20"><img src="{{asset('front/new/assets/imgs/page/contact/chat.svg')}}" alt="Revira"></div>
                    <h4 class="mb-5">Chat to sales</h4>
                    <p class="font-sm color-gray-700 mb-5">Speak to our team.</p><a class="font-sm color-gray-900" href="mailto:support@Revira.com">support@Revira.com</a>
                  </div>
                  <div class="col-lg-3 text-center mb-30">
                    <div class="box-image mb-20"><img src="{{asset('front/new/assets/imgs/page/contact/call.svg')}}" alt="Revira"></div>
                    <h4 class="mb-5">Call us</h4>
                    <p class="font-sm color-gray-700 mb-5">Mon-Fri from 8am to 5pm</p><a class="font-sm color-gray-900" href="tel:+1(555)000-0000">+1(555)000-0000</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
