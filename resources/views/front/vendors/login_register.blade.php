@extends('front.layout.layout')
@section('content')
    <section class="section-box shop-template mt-60">
        <div class="container">
            @if (Session::has('success_message')) <!-- Check vendorRegister() method in Front/VendorController.php -->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success:</strong> {{ Session::get('success_message') }}
            </div>
            @endif
            {{-- Displaying Error Messages --}}
            @if (Session::has('error_message')) <!-- Check vendorRegister() method in Front/VendorController.php -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> {{ Session::get('error_message') }}
            </div>
            @endif
            {{-- Displaying Error Messages --}}
            @if ($errors->any()) <!-- Check vendorRegister() method in Front/VendorController.php -->
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> @php echo implode('', $errors->all('<div>:message</div>')); @endphp
            </div>
            @endif
            <div class="row mb-100">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <h3>Login in to your vendor account</h3>
                    <p class="font-md color-gray-500">Access to all features. No credit card required.</p>

                    <form action="{{ url('admin/login') }}" method="post">
                    @csrf
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input class="form-control" id="vendor-email" type="email" name="email" value="{{ old('email') }}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Password *</label>
                                <input class="form-control" id="vendor-password" type="password" name="password" required>
                            </div>

                            <div class="form-group">
                                <button class="font-md-bold btn btn-buy" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <h3>Create a vendor account</h3>
                    <p class="font-md color-gray-500">Access to all features. No credit card required.</p>

                    <form id="vendorForm" action="{{ url('/vendor/register') }}" method="post">
                        @csrf
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Full Name *</label>
                                <input class="form-control" type="text" id="vendorname" name="name" value="{{ old('name') }}"
                                       required autofocus>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Mobile *</label>
                                <input class="form-control" id="vendormobile" type="text" name="mobile" value="{{ old('mobile') }}"
                                       required>
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input class="form-control" id="vendoremail" type="email" name="email" value="{{ old('email') }}"
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
                                    <input class="checkagree" type="checkbox" name="accept" id="accept" required>By clicking Register, you agree to
                                    our terms and policy.
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="font-md-bold btn btn-buy" type="submit">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
