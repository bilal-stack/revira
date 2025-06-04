@extends('front.layout.layout')
@section('content')
    <section class="section-box shop-template mt-60">
        <div class="container">
            <div class="row mb-100">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <h3>Create an account</h3>
                    <p class="font-md color-gray-500">Access to all features. No credit card required.</p>

                    {{-- Laravel validation errors --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Full Name *</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                    required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Password *</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Re-Password *</label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input class="checkagree" type="checkbox" required>By clicking Register, you agree to
                                    our terms and policy.
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="font-md-bold btn btn-buy" type="submit">Sign Up</button>
                            </div>
                            <div class="mt-20">
                                <span class="font-xs color-gray-500 font-medium">Already have an account?</span>
                                <a class="font-xs color-brand-3 font-medium" href="{{ route('login') }}">Sign In</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="box-login-social pt-65 pl-50">
                        <h5 class="text-center">Use Social Network Account</h5>
                        <div class="box-button-login mt-25"><a class="btn btn-login font-md-bold color-brand-3 mb-15">Sign
                                up with<img src="assets/imgs/page/account/google.svg" alt="Revira"></a><a
                                class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<span
                                    class="color-blue font-md-bold">Facebook</span></a><a
                                class="btn btn-login font-md-bold color-brand-3 mb-15">Sign up with<img
                                    src="assets/imgs/page/account/amazon.svg" alt="Revira"></a></div>
                        <div class="mt-10 text-center"><span class="font-xs color-gray-900">Buying for work?</span><a
                                class="color-brand-1 font-xs" href="#">Create a free business account</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
