<?php
// Getting the 'enabled' sections ONLY and their child categories (using the 'categories' relationship method) which, in turn, include their 'subcategories`
$sections = \App\Models\Section::sections();
$categories = \App\Models\Category::with('subCategories')->where('parent_id', 0)->get();
// dd($sections);
?>

<div class="topbar">
    <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">

                <li><a class="font-xs" href="{{ url('about-us') }}">About Us</a></li>
                <li><a class="font-xs" href="{{ url('careers') }}">Careers</a></li>
                <li><a class="font-xs" href="{{ url('vendor/login-register') }}">Open a shop</a></li>
            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3">Free shipping for all
                orders over</span><span class="font-sm-bold color-success"> $75.00</span></div>
        <div class="menu-topbar-right"><span class="font-xs color-brand-3">Need help? Call Us:</span><span
                class="font-sm-bold color-success"> + 1800 900</span>
            <div id="google_translate_element" style="display: none"></div>
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown"
                        aria-expanded="true" data-bs-display="static">
        <span class="dropdown-right font-xs color-brand-3">
            <img src="{{ asset('front/new/assets/imgs/template/en.svg') }}" alt="Revira"> English
        </span>
                </button>

                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
                    <li><a class="dropdown-item" href="#" onclick="translateLanguage('en');return false;">
                            <img src="{{ asset('front/new/assets/imgs/template/flag-en.svg') }}" alt="Revira"> English
                        </a></li>
                    <li><a class="dropdown-item" href="#" onclick="translateLanguage('fr');return false;">
                            <img src="{{ asset('front/new/assets/imgs/template/flag-fr.svg') }}" alt="Revira"> Français
                        </a></li>
                    <li><a class="dropdown-item" href="#" onclick="translateLanguage('es');return false;">
                            <img src="{{ asset('front/new/assets/imgs/template/flag-es.svg') }}" alt="Revira"> Español
                        </a></li>
                    <li><a class="dropdown-item" href="#" onclick="translateLanguage('pt');return false;">
                            <img src="{{ asset('front/new/assets/imgs/template/flag-pt.svg') }}" alt="Revira"> Português
                        </a></li>
                    <li><a class="dropdown-item" href="#" onclick="translateLanguage('zh-CN');return false;">
                            <img src="{{ asset('front/new/assets/imgs/template/flag-cn.svg') }}" alt="Revira"> 中国人
                        </a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-language">
                <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown"
                    aria-expanded="true" data-bs-display="static"><span
                        class="dropdown-right font-xs color-brand-3">USD</span></button>
                <ul class="dropdown-menu dropdown-menu-light dropdown-menu-end" aria-labelledby="dropdownPage2"
                    data-bs-popper="static">
                    <li><a class="dropdown-item active" href="#">USD</a></li>
                    <li><a class="dropdown-item" href="#">EUR</a></li>
                    <li><a class="dropdown-item" href="#">AUD</a></li>
                    <li><a class="dropdown-item" href="#">SGP</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="{{ url('/') }}"><img alt="Revira"
                            src="{{ asset('front/new/assets/imgs/logo.png') }}"></a></div>
                <div class="header-search">
                    <div class="box-header-search">
                        <form class="form-search" action="{{ url('/search-products') }}" method="get">
                            <div class="box-category">
                                <select class="select-active select2-hidden-accessible">
                                    <option>All categories</option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section['id'] }}"
                                            @if (isset($_REQUEST['section_id']) && !empty($_REQUEST['section_id']) && $_REQUEST['section_id'] == $section['id']) selected @endif>{{ $section['name'] }}
                                        </option> {{-- the search bar drop-down menu at the top --}} {{-- We use the "value" HTML attribute as a value for the "name" HTML attribute for submitting the Search Form. Check the "name" HTML attribute too inside the <input> HTML tag above there! --}}
                                    @endforeach
                                </select>
                            </div>
                            <div class="box-keysearch">
                                <input class="form-control font-xs" type="text" name="search"
                                    @if (isset($_REQUEST['search']) && !empty($_REQUEST['search'])) value="{{ $_REQUEST['search'] }}" @endif
                                    placeholder="Search for items">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="active" href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('shop-grid') }}">Shop</a></li>
                            <li><a href="{{ url('vendors/list') }}">Vendors</a></li>
                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                            <li><a href="{{ url('contact') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span
                            class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-shop">
                    <div class="d-inline-block box-dropdown-cart"><span
                            class="font-lg icon-list icon-account"><span>Account</span></span>
                        <div class="dropdown-account">
                            <ul>
                                @if (!Auth::check())
                                    <li><a href="{{ url('login') }}">User Login</a></li>
                                    <li><a href="{{ url('user/login-register') }}">User Register</a></li>
                                    <li><a href="{{ url('vendor/login-register') }}">Vendor Login</a></li>
                                @else
                                    <li><a href="{{ url('user/account') }}">My Account</a></li>
                                    <li><a href="{{ url('user/orders') }}">My Orders</a></li>
                                    <li><a href="{{ route('user.logout') }}">Sign out</a></li>
                                @endif

                            </ul>
                        </div>
                    </div>

                    @include('front.layout.header_cart_items')

                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="{{ url('/') }}"><img alt="Revira"
                        src="{{ asset('front/new/assets/imgs/logo.png') }}"></a></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li><a class="active" href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('shop-grid') }}">Shop</a></li>
                            <li><a href="{{ url('shop-vendor-list') }}">Vendors</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <div class="mobile-header-top">
                        <div class="user-account"><a href="page-account.php">
                                <img src="{{ asset('front/new/assets/imgs/template/ava_1.png') }}"
                                    alt="Revira"></a>
                            <div class="content">
                                <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                <p class="font-xs text-muted">You have 3 new messages</p>
                            </div>
                        </div>
                    </div>
                    <ul class="mobile-menu">
                        <ul>
                            @if (!Auth::check())
                                <li><a href="{{ url('user/login') }}">Sign in</a></li>
                                <li><a href="{{ url('sign-up') }}">Sign up</a></li>
                            @else
                                <li><a href="{{ url('user/account') }}">My Account</a></li>
                                <li><a href="{{ url('user/account') }}">Order Tracking</a></li>
                                <li><a href="{{ url('user/orders') }}">My Orders</a></li>
                                <li><a href="page-account.php">Setting</a></li>
                                <li><a href="{{ route('user.logout') }}">Sign out</a></li>
                            @endif

                        </ul>

                    </ul>
                </div>
                <div class="mobile-banner">
                    <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                        <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                        <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                            href="{{ url('shop-grid') }}">learn more</a>
                    </div>
                </div>
                <div class="site-copyright color-gray-400 mt-30">Copyright 2025 &copy; Revira.</div>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-left"><a class="btn btn-open" href="#"></a>
    <ul class="menu-icons hidden">
        @foreach ($headerCategories as $category)
            @if ($category->subCategories->count())
                <li><a href="javascript:void(0)">

                        @if (!$category['category_image'])
                            <img src="{{ asset('front/new/assets/imgs/template/monitor.svg') }}" alt="Revira">
                        @else
                            <img src="{{ url('front/images/category_images/' . $category['category_image']) }}"
                                alt="Revira">
                        @endif
                    </a></li>
            @endif
        @endforeach

    </ul>
    <ul class="menu-texts menu-close">
        @foreach ($headerCategories as $category)
            <li class="has-children">
                <a href="{{ url($category->url) }}"><span class="img-link">
                        @if (!$category->category_image)
                            <img src="{{ asset('front/new/assets/imgs/template/monitor.svg') }}" alt="Revira">
                        @else
                            <img src="{{ url('front/images/category_images/' . $category->category_image) }}"
                                alt="{{ $category->category_name }}">
                        @endif

                    </span>
                    <span class="text-link">{{ $category->category_name }}</span>
                </a>
                @if ($category->subCategories->count())
                    <ul class="sub-menu">
                        @foreach ($category->subCategories as $child)
                            <li><a href="{{ url($child->url) }}">{{ $child->category_name }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</div>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="{{ url('/') }}"><img alt="Revira"
                        src="assets/imgs/logo.png"></a></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="{{ url('/') }}">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('shop-grid') }}">Shop</a></li>
                            <li><a href="{{ url('shop-vendor-list') }}">Vendors</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <div class="mobile-header-top">
                        <div class="user-account"><a href="page-account.php"><img
                                    src="assets/imgs/template/ava_1.png" alt="Revira"></a>
                            <div class="content">
                                <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                <p class="font-xs text-muted">You have 3 new messages</p>
                            </div>
                        </div>
                    </div>
                    <ul class="mobile-menu">
                        @if (!Auth::check())
                            <li><a href="{{ url('user/login') }}">Sign in</a></li>
                            <li><a href="{{ url('sign-up') }}">Sign up</a></li>
                        @else
                            <li><a href="{{ url('user/account') }}">My Account</a></li>
                            <li><a href="{{ url('user/account') }}">Order Tracking</a></li>
                            <li><a href="{{ url('user/orders') }}">My Orders</a></li>
                            <li><a href="page-account.php">Setting</a></li>
                            <li><a href="{{ route('user.logout') }}">Sign out</a></li>
                        @endif
                    </ul>
                </div>
                <div class="mobile-banner">
                    <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                        <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                        <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow"
                            href="{{ url('shop-grid') }}">learn more</a>
                    </div>
                </div>
                <div class="site-copyright color-gray-400 mt-30">Copyright 2025 &copy; Revira.</div>
            </div>
        </div>
    </div>
</div>
<!-- Header /- -->
