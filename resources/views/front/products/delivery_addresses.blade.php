{{-- This page is 'include'-ed in front/products/checkout.blade.php, and will be used by jQuery AJAX to reload it, check front/js/custom.js --}}


    <!-- Form-Fields /- -->
    <h4 class="section-h4 deliveryText mb-4">Add New Delivery Address</h4> {{-- We created that deliveryText CSS class to use the HTML element as a handle for jQuery to change the <h4> content when clicking the Edit button --}}
    <div class="u-s-m-b-24">
        <input type="checkbox" class="check-box" id="ship-to-different-address" data-toggle="collapse" data-target="#showdifferent">

        @if (count($deliveryAddresses) > 0) {{-- Checking if there are any $deliveryAddreses for the currently authenticated/logged-in user --}} {{-- $deliveryAddresses variable is passed in from checkout() method in Front/ProductsController.php --}}
            <label class="label-text newAddress" for="ship-to-different-address">Ship to a different address?</label>
        @else {{-- if there're no already existing delivery addresses --}}
            <label class="label-text newAddress" for="ship-to-different-address">Check to add Delivery Address</label>
        @endif

    </div>
    <div class="collapse mt-4" id="showdifferent">
        <!-- Form-Fields -->
        {{-- Note: To show the form's Validation Error Messages (Laravel's Validation Error Messages) from the AJAX call response from the server (backend), we create a <p> tag after every <input> field --}} {{-- We structure and use a certain pattern so that the <p> id pattern must be like: delivery-x (e.g. delivery-mobile, delivery-email, ... in order for the jQuery loop to work. And x must be identical to the 'name' HTML attributes (e.g. the <input> with the    name='mobile'    HTML attribute must have a <p> with an id HTML attribute    id="delivery-mobile"    ) so that when the vaildation errors array is sent as a response from backend/server (check $validator->messages()    inside    the method inside the controller) to the AJAX request, they could conveniently/easily be handled by the jQuery $.each() loop. Check front/js/custom.js) --}}
        <form id="addressAddEditForm" action="javascript:;" method="post">
            @csrf


            <input type="hidden" name="delivery_id"> {{-- We created this hidden <input> field to submit the delivery address id when this HTML Form is submitted via AJAX to save the delivery address in the `delivery_addresses` database table. Check the Save Delivery Addresses via AJAX function in front/js/custom.js file --}}
            <div class="col-lg-12">
                <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Name*"
                           id="delivery_name" name="delivery_name" value="{{ old('delivery_name', '') }}">
                    <p id="delivery-delivery_name"></p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <textarea class="form-control font-sm" type="text" placeholder="Address 1*"
                              id="delivery_address" name="delivery_address">{{ old('delivery_address') }}</textarea>
                    <p id="delivery-delivery_address"></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="City*"
                           id="delivery_city" name="delivery_city" value="{{ old('delivery_city') }}">
                    <p id="delivery-delivery_city"></p>
                </div>
                <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="State*"
                           id="delivery_state" name="delivery_state" value="{{ old('delivery_state') }}">
                    <p id="delivery-delivery_state"></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <select class="form-control font-sm select-style1 color-gray-700" id="delivery_country" name="delivery_country">
                        <option value="">Select Country</option>

                        @foreach ($countries as $country) {{-- $countries was passed from UserController to view using compact() method --}}
                        <option value="{{ $country['country_name'] }}"  @if ($country['country_name'] == \Illuminate\Support\Facades\Auth::user()->country) selected @endif>{{ $country['country_name'] }}</option>
                        @endforeach
                    </select>
                    <p id="delivery-delivery_country"></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="PostCode / ZIP*"
                           id="delivery_pincode" name="delivery_pincode" value="{{ old('delivery_pincode', '') }}">
                    <p id="delivery-delivery_pincode"></p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Mobile/Phone"
                           id="delivery_mobile" name="delivery_mobile" value="{{ old('delivery_mobile', '') }}">
                    <p id="delivery-delivery_mobile"></p>
                </div>
            </div>
            <div class="u-s-m-b-13">
                <button style="width: 100%" type="submit" class="btn btn-buy">Save</button> {{-- Save whether it's Add or Edit --}}
            </div>
        </form>
        <!-- Form-Fields /- -->
    </div>

