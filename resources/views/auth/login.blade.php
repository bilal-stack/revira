@extends('front.layout.layout')
@section('content')
   <section class="section-box shop-template mt-60">
    <div class="container">
        <div class="row mb-100">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <h3>Member Login</h3>
                <p class="font-md color-gray-500">Welcome back!</p>

                <!-- Show Session Status -->
                @if (session('status'))
                    <div class="alert alert-success mb-4 text-success">
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Show Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger mb-4 text-danger">
                        <ul class="mb-0 ps-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('guest.login') }}" class="form-register mt-30 mb-30">
                    @csrf
                    <div class="form-group">
                        <label class="mb-5 font-sm color-gray-700">Email-test *</label>
                        <input class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="you@example.com">
                    </div>
                    <div class="form-group">
                        <label class="mb-5 font-sm color-gray-700">Password *</label>
                        <input class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="******************">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="color-gray-500 font-xs">
                                    <input class="checkagree" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6 text-end">
                            <div class="form-group">
                                @if (Route::has('password.request'))
                                    <a class="font-xs color-gray-500" href="{{ route('password.request') }}">Forgot your password?</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="font-md-bold btn btn-buy">Log In</button>
                    </div>
                    <div class="mt-20">
                        <span class="font-xs color-gray-500 font-medium">Don't have an account?</span>
                        <a class="font-xs color-brand-3 font-medium" href="{{ route('register') }}">Sign Up</a>
                    </div>
                </form>
            </div>
            <div class="col-lg-5"></div>
        </div>
    </div>
</section>

@endsection
