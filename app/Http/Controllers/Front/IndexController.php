<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Vendor;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use javcorreia\Wishlist\Facades\Wishlist;

class IndexController extends Controller
{
    public function index()
    {
        $sliderBanners = Banner::where('type', 'Slider')->where('status', 1)->get()->toArray();
        $fixBanners = Banner::where('type', 'Fix')->where('status', 1)->get()->toArray();
        $newProducts = Product::orderBy('id', 'Desc')->where('status', 1)->limit(8)->get()->toArray(); // show the LATEST (DESCendingly) 8 added products (to show the 'New Arrivals' at the home page)    // Ordering, Grouping, Limit & Offset: https://laravel.com/docs/9.x/queries#ordering-grouping-limit-and-offset

        $bestSellers = Product::where([
            'is_bestseller' => 'Yes',
            'status' => 1 // product is enabled (active)
        ])
            ->inRandomOrder()
            ->with('brand')
            ->withCount('ratings') // number of reviews
            ->withAvg('ratings', 'rating')
            ->limit(9) // <-- limit here
            ->get()
            ->toArray();

        $discountedProducts = Product::where('product_discount', '>', 0)
            ->where('status', 1)
            ->with('brand')
            ->withCount('ratings') // number of reviews
            ->withAvg('ratings', 'rating')
            ->limit(6)
            ->inRandomOrder()
            ->get()->toArray(); // show 'Discounted Products' with RANDOM ORDERING

        $featuredProducts = Product::where([
            'is_featured' => 'Yes',
            'status' => 1 // product is enabled (active)
        ])->with('brand')
            ->withCount('ratings') // number of reviews
            ->withAvg('ratings', 'rating')
            ->limit(6)
            ->get()->toArray(); // show 'Featured Products'

        $mostViewedProducts = Product::select('products.*')
            ->join(DB::raw('(
        SELECT product_id, COUNT(*) as views
        FROM recently_viewed_products
        GROUP BY product_id
    ) as views_table'), 'products.id', '=', 'views_table.product_id')
            ->where('products.status', 1)
            ->with('brand')
            ->withCount('ratings')
            ->withAvg('ratings', 'rating')
            ->orderByDesc('views_table.views')
            ->limit(6)
            ->get()
            ->toArray();

        $brands = Brand::where('status', 1)->inRandomOrder()->limit(16)->get();

        // Static SEO (HTML meta tags): Check the HTML <meta> tags and <title> tag in front/layout/layout.blade.php
        $meta_title = 'Multi Vendor E-commerce Website';
        $meta_description = 'Online Shopping Website which deals in Clothing, Electronics & Appliances Products';
        $meta_keywords = 'eshop website, online shopping, multi vendor e-commerce';


        return view('front.index')->with(compact('sliderBanners', 'fixBanners', 'newProducts',
            'bestSellers', 'discountedProducts', 'featuredProducts', 'mostViewedProducts',
            'meta_title', 'meta_description', 'meta_keywords', 'brands')); // this is the same as:    return view('front/index');
    }

    public function vendors()
    {
        $vendors = Vendor::whereHas('vendorbusinessdetails')->with('vendorbusinessdetails', 'limitedProducts')
            ->where('status', 1)->paginate(15);

        return view('front.shop_vendor_list', compact('vendors'));
    }

    public function aboutUs()
    {

        return view('front.about_us', get_defined_vars());
    }

    public function careers()
    {

        return view('front.careers', get_defined_vars());
    }

    public function termsConditions()
    {
        return view('front.terms_and_conditions', get_defined_vars());
    }

    public function faqs()
    {
        return view('front.faqs', get_defined_vars());
    }

    public function wishlist()
    {
        $wishlists = Wishlist::getUserWishList(Auth::user()->id)->load('item');
        return view('front.wishlist')->with(compact('wishlists'));
    }

    public function addProductWishlist($id)
    {
        Wishlist::add($id, Auth::user()->id);
        $wishlists = Wishlist::getUserWishList(Auth::user()->id)->load('item');
        return view('front.wishlist')->with(compact('wishlists'));
    }

    public function removeProductWishlist($id)
    {
        Wishlist::remove($id, Auth::user()->id);
        $wishlists = Wishlist::getUserWishList(Auth::user()->id)->load('item');
        return view('front.wishlist')->with(compact('wishlists'));
    }

    private function getWishlistProduct($wishlists)
    {
        $products = [];
        foreach ($wishlists as $wishlist) {
            $products[] = Wishlist::getWishListItem($wishlist->item_id, Auth::user()->id);
            dd(Wishlist::getWishListItem($wishlist->item_id, Auth::user()->id));
        }

        return $products;
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    public function changeCurrency(Request $request)
    {
        $currency = $request->input('currency');
        session(['currency' => $currency]);

        return response()->json(['currency' => $currency]);
    }
}
