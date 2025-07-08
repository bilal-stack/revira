@extends('front.layout.layout')
@section('content')
    <section class="section-box shop-template mt-30">
        <div class="container box-account-template">
            <h3>Hello Steven</h3>
            <p class="font-md color-gray-500">From your account dashboard. you can easily check & view your recent orders,<br
                    class="d-none d-lg-block">manage your address and edit your password and account details.</p>
            <div class="box-tabs mb-100">
                <ul class="nav nav-tabs nav-tabs-account" role="tablist">
                    {{--                    <li><a class="active" href="#tab-notification" data-bs-toggle="tab" role="tab"--}}
                    {{--                            aria-controls="tab-notification" aria-selected="true">Notification</a></li>--}}
                    <li><a class="active" href="#tab-wishlist" data-bs-toggle="tab" role="tab" aria-controls="tab-wishlist"
                           aria-selected="true">Wishlist</a></li>
                    <li><a href="#tab-orders" data-bs-toggle="tab" role="tab" aria-controls="tab-orders"
                           aria-selected="true">Orders</a></li>
                    {{--                    <li><a href="#tab-order-tracking" data-bs-toggle="tab" role="tab" aria-controls="tab-order-tracking"--}}
                    {{--                            aria-selected="true">Order Tracking</a></li>--}}
                    <li><a href="#tab-setting" data-bs-toggle="tab" role="tab" aria-controls="tab-setting"
                           aria-selected="true">Setting</a></li>
                </ul>
                <div class="border-bottom mt-20 mb-40"></div>
                <div class="tab-content mt-30">
                    @include('front.users.partials.tab-orders')

                    @include('front.users.partials.tab-wishlist')

                    @include('front.users.partials.tab-setting')

                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');

            tabLinks.forEach(link => {
                link.addEventListener('shown.bs.tab', function (event) {
                    localStorage.setItem('activeTab', event.target.getAttribute('href'));
                });
            });

            const activeTab = localStorage.getItem('activeTab');
            if (activeTab) {
                const someTabTriggerEl = document.querySelector(`a[href="${activeTab}"]`);
                if (someTabTriggerEl) {
                    const tab = new bootstrap.Tab(someTabTriggerEl);
                    tab.show();
                }
            }
        });
    </script>
@endsection
