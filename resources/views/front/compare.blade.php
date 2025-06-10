    @extends('front.layout.layout')
    @section('content')
        <div class="section-box">
        <div class="breadcrumbs-div">
          <div class="container">
            <ul class="breadcrumb">
              <li><a class="font-xs color-gray-1000" href="index.php">Home</a></li>
              <li><a class="font-xs color-gray-500" href="shop-grid.php">Shop</a></li>
              <li><a class="font-xs color-gray-500" href="shop-compare.php">Compare</a></li>
            </ul>
          </div>
        </div>
      </div>
      <section class="section-box shop-template">
        <div class="container">
          <div class="row mb-80">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
              <div class="box-compare-products">
                <div class="table-responsive">
                  <table>
                    <tbody>
                      <tr>
                        <td><span>Products</span></td>
                        <td><img src="{{asset('front/new/assets/imgs/page/compare/img1.png')}}" alt="Revira">
                          <h6><a class="text-brand-3" href="shop-single-product.php">Dell Optiplex 9020 Small Form Business Desktop Tower PC</a></h6>
                        </td>
                        <td><img src="{{asset('front/new/assets/imgs/page/compare/img2.png')}}" alt="Revira">
                          <h6><a class="text-brand-3" href="shop-single-product-2.php">HP 24 All-in-One PC, Intel Core i3-1115G4, 4GB RAM</a></h6>
                        </td>
                        <td><img src="{{asset('front/new/assets/imgs/page/compare/img3.png')}}" alt="Revira">
                          <h6><a class="text-brand-3" href="shop-single-product-3.php">Logitech Brio 4K Webcam, Ultra 4K HD Video Calling</a></h6>
                        </td>
                      </tr>
                      <tr>
                        <td><span>Review</span></td>
                        <td>
                          <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                        </td>
                        <td>
                          <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                        </td>
                        <td>
                          <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                        </td>
                      </tr>
                      <tr>
                        <td><span>Screen Size</span></td>
                        <td><span>42”</span></td>
                        <td><span>42”</span></td>
                        <td><span>42”</span></td>
                      </tr>
                      <tr>
                        <td><span>Screen Definition</span></td>
                        <td><span>Full High Definition</span></td>
                        <td><span>Full High Definition</span></td>
                        <td><span>Full High Definition</span></td>
                      </tr>
                      <tr>
                        <td><span>Product Type</span></td>
                        <td><span>LED LCDs</span></td>
                        <td><span>LED LCDs</span></td>
                        <td><span>LED LCDs</span></td>
                      </tr>
                      <tr>
                        <td><span>Connectivity</span></td>
                        <td><span></span></td>
                        <td><span></span></td>
                        <td><span></span></td>
                      </tr>
                      <tr>
                        <td><span>Price</span></td>
                        <td><span class="font-sm-bold color-brand-3">$2786.5</span></td>
                        <td><span class="font-sm-bold color-brand-3">$2856.0</span></td>
                        <td><span class="font-sm-bold color-brand-3">$2950.0</span></td>
                      </tr>
                      <tr>
                        <td><span>Stock status</span></td>
                        <td><span class="btn btn-gray font-sm-bold">In Stock</span></td>
                        <td><span class="btn btn-out-stock font-sm-bold">Out of stock</span></td>
                        <td><span class="btn btn-gray font-sm-bold">In Stock</span></td>
                      </tr>
                      <tr>
                        <td><span>Buy now</span></td>
                        <td><a class="btn btn-buy w-auto" href="shop-cart.php">Add to Cart</a></td>
                        <td><a class="btn btn-cart w-auto" href="page-contact.php">Contact us</a></td>
                        <td><a class="btn btn-buy w-auto" href="shop-cart.php">Add to Cart</a></td>
                      </tr>
                      <tr>
                        <td><span>Remove</span></td>
                        <td><a class="btn btn-delete" href="#"></a></td>
                        <td><a class="btn btn-delete" href="#"></a></td>
                        <td><a class="btn btn-delete" href="#"></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <h4 class="color-brand-3">Recently viewed items</h4>
          <div class="row mt-40 mb-40">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Dell</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.php">Dell Optiplex 9020 Small Form Business Desktop</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.php">HP 24 All-in-One PC, Intel Core i3-1115G4, 4GB RAM</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp1.png')}}" alt="Revira"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Gateway</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.php">Gateway 23.8&quot; All-in-one Desktop</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp2.png')}}" alt="Revira"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.php">HP 22 All-in-One PC, Intel Pentium Silver J5040</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
          </div>
          <h4 class="color-brand-3">You may also like</h4>
          <div class="list-products-5 mt-20">
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a>
{{--                    <a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a>--}}
                    <a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp3.png')}}" alt="Revira"></a></div>
                <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">HP</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.php">HP 24mh FHD Monitor - Computer Monitor</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php">Add To Cart</a></div>
                  <ul class="list-features">
                    <li>27-inch (diagonal) Retina 5K display</li>
                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                    <li>AMD Radeon Pro 5300 graphics</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp4.png')}}" alt="Revira"></a></div>
                <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Logitech</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.php">Logitech H390 Wired Headset, Stereo Headphones</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php">Add To Cart</a></div>
                  <ul class="list-features">
                    <li>27-inch (diagonal) Retina 5K display</li>
                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                    <li>AMD Radeon Pro 5300 graphics</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp5.png')}}" alt="Revira"></a></div>
                <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Samsung</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.php">Samsung 36&quot; French door 28 cu. ft. Smart Energy</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php">Add To Cart</a></div>
                  <ul class="list-features">
                    <li>27-inch (diagonal) Retina 5K display</li>
                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                    <li>AMD Radeon Pro 5300 graphics</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp6.png')}}" alt="Revira"></a></div>
                <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.php">2025 Apple iMac with Retina 5K Display 8GB RAM</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php">Add To Cart</a></div>
                  <ul class="list-features">
                    <li>27-inch (diagonal) Retina 5K display</li>
                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                    <li>AMD Radeon Pro 5300 graphics</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-grid-style-3">
              <div class="card-grid-inner">
                <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.php"><img src="{{asset('front/new/assets/imgs/page/homepage1/imgsp7.png')}}" alt="Revira"></a></div>
                <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Samsung</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.php">Samsung 36&quot; French door 28 cu. ft. Smart Energy</a>
                  <div class="rating"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><img src="{{asset('front/new/assets/imgs/template/icons/star.svg')}}" alt="Revira"><span class="font-xs color-gray-500">(65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                  <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php">Add To Cart</a></div>
                  <ul class="list-features">
                    <li>27-inch (diagonal) Retina 5K display</li>
                    <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                    <li>AMD Radeon Pro 5300 graphics</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection
