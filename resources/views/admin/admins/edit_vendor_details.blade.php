@extends('admin.layout.layout')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Update Vendor Details</h3>

                        </div>

                    </div>
                </div>
            </div>



            <form class="forms-sample" action="{{ url('admin/edit-admin-vendor-details/'. $vendorDetails['id']) }}" method="post" enctype="multipart/form-data"> @csrf <!-- Using the enctype="multipart/form-data" to allow uploading files (images) -->

                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Personal Information</h4>


                                {{-- Our Bootstrap error code in case of wrong current password or the new password and confirm password are not matching: --}}
                                {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
                                @if (Session::has('error_message')) <!-- Check AdminController.php, updateAdminPassword() method -->
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error:</strong> {{ Session::get('error_message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif



                                {{-- Displaying Laravel Validation Errors: https://laravel.com/docs/9.x/validation#quick-displaying-the-validation-errors --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">

                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach

                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                {{-- Our Bootstrap success message in case of updating admin password is successful: --}}
                                {{-- Determining If An Item Exists In The Session (using has() method): https://laravel.com/docs/9.x/session#determining-if-an-item-exists-in-the-session --}}
                                @if (Session::has('success_message')) <!-- Check AdminController.php, updateAdminPassword() method -->
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success:</strong> {{ Session::get('success_message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif

                                    <div class="form-group">
                                        <label>Vendor Username/Email</label>
                                        <input class="form-control" value="{{ $vendorDetails['email'] }}" readonly> <!-- Check updateAdminPassword() method in AdminController.php --> {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor_name">Name</label>
                                        <input type="text" class="form-control" id="vendor_name" placeholder="Enter Name" name="vendor_name" value="{{ old('vendor_name', $vendorDetails['name'] ?? '') }}"> {{-- $vendorDetails was passed from AdminController --}} {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor_address">Address</label>
                                        <input type="text" class="form-control" id="vendor_address" placeholder="Enter Address" name="vendor_address" value="{{ old('vendor_address', $vendorDetails['address'] ?? '') }}"> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor_city">City</label>
                                        <input type="text" class="form-control" id="vendor_city" placeholder="Enter City" name="vendor_city" value="{{ old('vendor_city', $vendorDetails['city'] ?? '') }}"> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor_state">State</label>
                                        <input type="text" class="form-control" id="vendor_state" placeholder="Enter State" name="vendor_state" value="{{ old('vendor_state', $vendorDetails['state'] ?? '') }}"> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        {{-- Show all world countries from the database `countries` table --}}
                                        <label for="shop_country">Country</label>

                                        <select class="form-control" id="vendor_country" name="vendor_country"  style="color: #495057">
                                            <option value="">Select Country</option>

                                            @foreach ($countries as $country) {{-- $countries was passed from AdminController to view using compact() method --}}
                                            <option value="{{ $country['country_name'] }}" @if ($country['country_name'] == $vendorDetails['country']) selected @endif>{{ $country['country_name'] }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor_pincode">Pincode</label>
                                        <input type="text" class="form-control" id="vendor_pincode" placeholder="Enter Pincode" name="vendor_pincode" value="{{ old('vendor_pincode', $vendorDetails['pincode'] ?? '') }}"> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="vendor_mobile">Mobile</label>
                                        <input type="text" class="form-control" id="vendor_mobile" placeholder="Enter 10 Digit Mobile Number" name="vendor_mobile" value="{{ old('vendor_mobile', $vendorDetails['mobile'] ?? '') }}" maxlength="10" minlength="10"> {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}}
                                    </div>
                                        <div class="form-group">
                                            {{-- Show all world countries from the database `countries` table --}}
                                            <label for="confirm">Email Confirm</label>

                                            <select class="form-control" id="confirm" name="confirm"  style="color: #495057">
                                                <option value="">Select</option>
                                                <option value="yes" {{ old('confirm', $vendorDetails['confirm'] ?? '') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                                <option value="no" {{ old('confirm', $vendorDetails['confirm'] ?? '') == 'No' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            {{-- Show all world countries from the database `countries` table --}}
                                            <label for="active">Active</label>

                                            <select class="form-control" id="active" name="active"  style="color: #495057">
                                                <option value="">Select </option>
                                                <option value="1" {{ old('confirm', $vendorDetails['status'] ?? '') == '1' ? 'selected' : '' }}>Yes</option>
                                                <option value="0" {{ old('confirm', $vendorDetails['status'] ?? '') == '0' ? 'selected' : '' }}>No</option>
                                            </select>
                                        </div>

                                    <div class="form-group">
                                        <label for="vendor_image">Vendor Photo</label>
                                        <input type="file" class="form-control" id="vendor_image" name="vendor_image">
                                        {{-- Show the admin image if exists --}}
                                        @if (!empty($image)) {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}}
                                            <a target="_blank" href="{{ url('admin/images/photos/' . $image) }}">View Image</a> <!-- We used    target="_blank"    to open the image in another separate page --> {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}}
                                            <input type="hidden" name="current_vendor_image" value="{{ $image }}"> <!-- to send the current admin image url all the time with all the requests --> {{-- Accessing Specific Guard Instances: https://laravel.com/docs/9.x/authentication#accessing-specific-guard-instances --}}
                                        @endif
                                    </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Update Vendor Business Information</h4>
                                    <div class="form-group">
                                        <label for="shop_name">Shop Name</label>
                                        <input type="text" class="form-control" id="shop_name" placeholder="Enter Shop Name" name="shop_name"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_name'])) value="{{ old('shop_name', $vendorDetails['vendorbusinessdetails']['shop_name'] ?? '') }}" @else value="{{old('shop_name')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_address">Shop Address</label>
                                        <input type="text" class="form-control" id="shop_address" placeholder="Enter Shop Address" name="shop_address"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_address'])) value="{{ old('shop_address', $vendorDetails['vendorbusinessdetails']['shop_address'] ?? '') }}" @else value="{{old('shop_address')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_city">Shop City</label>
                                        <input type="text" class="form-control" id="shop_city" placeholder="Enter Shop City" name="shop_city"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_city'])) value="{{ old('shop_city', $vendorDetails['vendorbusinessdetails']['shop_city'] ?? '') }}" @else value="{{old('shop_city')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_state">Shop State</label>
                                        <input type="text" class="form-control" id="shop_state" placeholder="Enter Shop State" name="shop_state"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_state'])) value="{{ old('shop_state', $vendorDetails['vendorbusinessdetails']['shop_state'] ?? '') }}" @else value="{{old('shop_state')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        {{-- Show all world countries from the database `countries` table --}}
                                        <label for="shop_country">Shop Country</label>

                                        <select class="form-control" id="shop_country" name="shop_country" style="color: #495057">
                                            <option value="">Select Country</option>

                                            @foreach ($countries as $country) {{-- $countries was passed from AdminController to view using compact() method --}}
                                            <option value="{{ $country['country_name'] }}"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_country']) && $country['country_name'] == $vendorDetails['vendorbusinessdetails']['shop_country']) selected @endif>{{ $country['country_name'] }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_pincode">Shop Pincode</label>
                                        <input type="text" class="form-control" id="shop_pincode" placeholder="Enter Shop Pincode" name="shop_pincode"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_pincode'])) value="{{ old('shop_pincode', $vendorDetails['vendorbusinessdetails']['shop_pincode'] ?? '') }}" @else value="{{old('shop_pincode')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_mobile">Shop Mobile</label>
                                        <input type="text" class="form-control" id="shop_mobile" placeholder="Enter 10 Digit Shop Mobile Number" name="shop_mobile"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_mobile'])) value="{{ old('shop_mobile', $vendorDetails['vendorbusinessdetails']['shop_mobile'] ?? '') }}" @else value="{{old('shop_mobile')}}" @endif maxlength="10" minlength="10">
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_mobile">Shop Website</label>
                                        <input type="text" class="form-control" id="shop_website" placeholder="Enter Shop Website" name="shop_website"  @if (isset($vendorDetails['vendorbusinessdetails']['shop_website'])) value="{{ old('shop_website', $vendorDetails['vendorbusinessdetails']['shop_website'] ?? '') }}" @else value="{{old('shop_website')}}" @endif>
                                    </div>
                                    <div class="form-group">
                                        <label for="business_license_number">Business License Number</label>
                                        <input type="text" class="form-control" id="business_license_number" placeholder="Enter Business License Number" name="business_license_number"  @if (isset($vendorDetails['vendorbusinessdetails']['business_license_number'])) value="{{ old('business_license_number', $vendorDetails['vendorbusinessdetails']['business_license_number'] ?? '') }}" @else value="{{old('business_license_number')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="gst_number">GST Number</label>
                                        <input type="text" class="form-control" id="gst_number" placeholder="Enter GST Number" name="gst_number"  @if (isset($vendorDetails['vendorbusinessdetails']['gst_number'])) value="{{ old('gst_number', $vendorDetails['vendorbusinessdetails']['gst_number'] ?? '') }}" @else value="{{old('gst_number')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="pan_number">PAN Number</label>
                                        <input type="text" class="form-control" id="pan_number" placeholder="Enter PAN Number" name="pan_number"  @if (isset($vendorDetails['vendorbusinessdetails']['pan_number'])) value="{{ old('pan_number', $vendorDetails['vendorbusinessdetails']['pan_number'] ?? '') }}" @else value="{{old('pan_number')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="address_proof">Shop Address Proof</label>
                                        <select class="form-control" name="address_proof" id="address_proof">
                                            <option value="Passport"        @if(isset($vendorDetails['vendorbusinessdetails']['address_proof']) && $vendorDetails['vendorbusinessdetails']['address_proof'] == 'Passport')        selected @endif>Passport</option>
                                            <option value="Voting Card"     @if(isset($vendorDetails['vendorbusinessdetails']['address_proof']) && $vendorDetails['vendorbusinessdetails']['address_proof'] == 'Voting Card')     selected @endif>Voting Card</option>
                                            <option value="PAN"             @if(isset($vendorDetails['vendorbusinessdetails']['address_proof']) && $vendorDetails['vendorbusinessdetails']['address_proof'] == 'PAN')             selected @endif>PAN</option>
                                            <option value="Driving License" @if(isset($vendorDetails['vendorbusinessdetails']['address_proof']) && $vendorDetails['vendorbusinessdetails']['address_proof'] == 'Driving License') selected @endif>Driving License</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="shop_image">Shop Image</label>
                                        <input type="file" class="form-control" id="shop_image" name="shop_image">
                                        {{-- Show the admin image if exists --}}
                                        @if (!empty($vendorDetails['vendorbusinessdetails']['shop_image']))
                                            <a target="_blank" href="{{ url('admin/images/photos/' . $vendorDetails['vendorbusinessdetails']['shop_image']) }}">View Image</a> <!-- We used    target="_blank"    to open the image in another separate page -->
                                            <input type="hidden" name="current_address_proof" value="{{ $vendorDetails['vendorbusinessdetails']['shop_image'] }}"> <!-- to send the current admin image url all the time with all the requests -->
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="address_proof_image">Address Proof Image</label>
                                        <input type="file" class="form-control" id="address_proof_image" name="address_proof_image">
                                        {{-- Show the admin image if exists --}}
                                        @if (!empty($vendorDetails['vendorbusinessdetails']['address_proof_image']))
                                            <a target="_blank" href="{{ url('admin/images/proofs/' . $vendorDetails['vendorbusinessdetails']['address_proof_image']) }}">View Image</a> <!-- We used    target="_blank"    to open the image in another separate page -->
                                            <input type="hidden" name="current_address_proof" value="{{ $vendorDetails['vendorbusinessdetails']['address_proof_image'] }}"> <!-- to send the current admin image url all the time with all the requests -->
                                        @endif
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Update Vendor Bank Information</h4>

                                        <div class="form-group">
                                            <label for="account_holder_name">Account Holder Name</label>
                                            <input type="text" class="form-control" id="account_holder_name" placeholder="Enter Account Holder Name" name="account_holder_name"  @if (isset($vendorDetails['vendorbankdetails']['account_holder_name'])) value="{{ old('account_holder_name', $vendorDetails['vendorbankdetails']['account_holder_name'] ?? '') }}" @else value="{{old('account_holder_name')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="bank_name">Bank Name</label>
                                            <input type="text" class="form-control" id="bank_name" placeholder="Enter Bank Name" name="bank_name"  @if (isset($vendorDetails['vendorbankdetails']['bank_name'])) value="{{ old('bank_name', $vendorDetails['vendorbankdetails']['bank_name'] ?? '') }}" @else value="{{old('bank_name')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="account_number">Account Number</label>
                                            <input type="text" class="form-control" id="account_number" placeholder="Enter Account Number" name="account_number"  @if (isset($vendorDetails['vendorbankdetails']['account_number'])) value="{{ old('account_number', $vendorDetails['vendorbankdetails']['account_number'] ?? '') }}" @else value="{{old('account_number')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="bank_ifsc_code">Bank IFSC Code</label>
                                            <input type="text" class="form-control" id="bank_ifsc_code" placeholder="Enter Bank IFSC Code" name="bank_ifsc_code"  @if (isset($vendorDetails['vendorbankdetails']['bank_ifsc_code'])) value="{{ old('bank_ifsc_code', $vendorDetails['vendorbankdetails']['bank_ifsc_code'] ?? '') }}" @else value="{{old('bank_ifsc_code')}}" @endif> {{-- $vendorDetails was passed from AdminController --}}
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                                        <button type="reset"  class="btn btn-light">Cancel</button>

                                </div>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <!-- content-wrapper ends -->
        @include('admin.layout.footer')
        <!-- partial -->
    </div>
@endsection
