@extends('client.layouts.master')

@section('content')
     <!--Offcanvas menu area start-->
     <div class="off_canvars_overlay"></div>
     <div class="Offcanvas_menu">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="canvas_open">
                         <span>MENU</span>
                         <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                     </div>
                     <div class="Offcanvas_menu_wrapper">
 
                         <div class="canvas_close">
                             <a href="#"><i class="ion-android-close"></i></a>
                         </div>
 
 
                         <div class="top_right text-end">
                             <ul>
                                 <li class="top_links"><a href="#"><i class="ion-android-person"></i> My Account<i class="ion-ios-arrow-down"></i></a>
                                     <ul class="dropdown_links">
                                         <li><a href="{{ asset('theme/client/checkout.html')}}">Checkout </a></li>
                                         <li><a href="{{ asset('theme/client/my-account.html')}}">My Account </a></li>
                                         <li><a href="{{ asset('theme/client/cart.html')}}">Shopping Cart</a></li>
                                         <li><a href="{{ asset('theme/client/wishlist.html')}}">Wishlist</a></li>
                                     </ul>
                                 </li>
                                 <li class="language"><a href="#"><img src="{{ asset('theme/client/assets/img/logo/language.png')}}" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                                     <ul class="dropdown_language">
                                         <li><a href="#"><img src="{{ asset('theme/client/assets/img/logo/language.png')}}" alt=""> English</a></li>
                                         <li><a href="#"><img src="{{ asset('theme/client/assets/img/logo/language2.png')}}" alt=""> Germany</a></li>
                                     </ul>
                                 </li>
                                 <li class="currency"><a href="#">$ USD<i class="ion-ios-arrow-down"></i></a>
                                     <ul class="dropdown_currency">
                                         <li><a href="#">EUR – Euro</a></li>
                                         <li><a href="#">GBP – British Pound</a></li>
                                         <li><a href="#">INR – India Rupee</a></li>
                                     </ul>
                                 </li>
 
 
                             </ul>
                         </div>
                         <div class="Offcanvas_follow">
                             <label>Follow Us:</label>
                             <ul class="follow_link">
                                 <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                 <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                 <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                 <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                             </ul>
                         </div>
                         <div class="search-container">
                             <form action="#">
                                 <div class="search_box">
                                     <input placeholder="Search entire store here ..." type="text">
                                     <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                 </div>
                             </form>
                         </div>
                         <div id="menu" class="text-left ">
                             <ul class="offcanvas_main_menu">
                                 <li class="menu-item-has-children">
                                     <a href="{{ asset('theme/client/index.html')}}">Home</a>
                                    
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="#">Shop</a>
                                     <ul class="sub-menu">
                                         <li class="menu-item-has-children">
                                             <a href="#">Shop Layouts</a>
                                             <ul class="sub-menu">
                                                 <li><a href="shop.html">shop</a></li>
                                                 <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                 <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                 <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                 <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                 <li><a href="shop-list.html">List View</a></li>
                                             </ul>
                                         </li>
                                         <li class="menu-item-has-children">
                                             <a href="#">other Pages</a>
                                             <ul class="sub-menu">
                                                 <li><a href="cart.html">cart</a></li>
                                                 <li><a href="wishlist.html">Wishlist</a></li>
                                                 <li><a href="{{ asset('theme/client/checkout.html')}}">Checkout</a></li>
                                                 <li><a href="{{ asset('theme/client/my-account.html')}}">my account</a></li>
                                                 <li><a href="{{ asset('theme/client/404.html')}}">Error 404</a></li>
                                             </ul>
                                         </li>
                                         <li class="menu-item-has-children">
                                             <a href="#">Product Types</a>
                                             <ul class="sub-menu">
                                                 <li><a href="{{ asset('theme/client/product-details.html')}}">product details</a></li>
                                                 <li><a href="{{ asset('theme/client/product-sidebar.html')}}">product sidebar</a></li>
                                                 <li><a href="{{ asset('theme/client/product-grouped.html')}}">product grouped</a></li>
                                                 <li><a href="{{ asset('theme/client/product-variable.html')}}">product variable</a></li>
                                             </ul>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="{{ asset('theme/client/blog.html') }}">blog</a>
                                     {{-- <ul class="sub-menu">
                                         <li><a href="{{ asset('theme/client/blog.html')}}">blog</a></li>
                                         <li><a href="{{ asset('theme/client/blog-details.html') }}">blog details</a></li>
                                         <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                         <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                     </ul> --}}
 
                                 </li> 
                                 <li class="menu-item-has-children">
                                     <a href="#">pages </a>
                                     <ul class="sub-menu">
                                         <li><a href="{{ asset('theme/client/my-account.html')}}">About Us</a></li>
                                         <li><a href="{{ asset('theme/client/services.html')}}">services</a></li>
                                         <li><a href="{{ asset('theme/client/faq.html')}}">Frequently Questions</a></li>
                                         <li><a href="{{ asset('theme/client/login.html')}}">login</a></li>
                                         <li><a href="{{ asset('theme/client/compare.html')}}">compare</a></li>
                                         <li><a href="{{ asset('theme/client/privacy-policy.html')}}">privacy policy</a></li>
                                         <li><a href="{{ asset('theme/client/coming-soon.html.html')}}">Coming Soon</a></li>
                                     </ul>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="{{ asset('theme/client/my-account.html')}}">my account</a>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="{{ asset('theme/client/about.html') }}">About Us</a>
                                 </li>
                                 <li class="menu-item-has-children">
                                     <a href="{{ asset('theme/client/contact.html') }}"> Contact Us</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
 
     </div>
     <!--Offcanvas menu area end-->
 
     <!--slider area start-->
     <section class="slider_section slider_two mb-50">
         <div class="slider_area owl-carousel">
             <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider10.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="slider_content">
                                 <h2>Hight Quality</h2>
                                 <h1>The Parts Of Shock Absorbers Assembly</h1>
                                 <a class="button" href="shop.html">shopping now</a>
                             </div>
                         </div>
                     </div>
                 </div>
 
             </div>
             <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider11.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="slider_content">
                                 <h2>Special Offer</h2>
                                 <h1>Get &250 In Total Discount On A New Set Of Tries</h1>
                                 <a class="button" href="shop.html">shopping now</a>
                             </div>
                         </div>
                     </div>
                 </div>
 
             </div>
             <div class="single_slider d-flex align-items-center" data-bgimg="assets/img/slider/slider12.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-12">
                             <div class="slider_content">
                                 <h2>HP Racer Skutex</h2>
                                 <h1>Feel The Greatest Oil Power With Best One Oil</h1>
                                 <a class="button" href="shop.html">shopping now</a>
                             </div>
                         </div>
                     </div>
                 </div>
 
             </div>
         </div>
     </section>
     <!--slider area end-->
 
     <!--banner area start-->
     <section class="banner_area mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="banner_container">
                         <div class="single_banner">
                             <div class="banner_thumb">
                                 <a href="shop.html"><img src="{{ asset('theme/client/assets/img/bg/banner3.jpg')}}" alt=""></a>
                                 <div class="banner_text">
                                     <h3>Car Audio</h3>
                                     <h2>Super Natural Sound</h2>
                                     <a href="shop.html">Shop Now</a>
                                 </div>
                             </div>
                         </div>
                         <div class="single_banner">
                             <div class="banner_thumb">
                                 <a href="shop.html"><img src="{{ asset('theme/clent/assets/img/bg/banner4.jpg')}}" alt=""></a>
                                 <div class="banner_text">
                                     <h3>All - New</h3>
                                     <h2>Perfomance Parts</h2>
                                     <a href="shop.html">Shop Now</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--banner area end-->
 
     <!--product area start-->
     <section class="product_area mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="section_title">
                         <h2><span> <strong>Special</strong>Offers</span></h2>
                     </div>
                     <div class="product_carousel product_column4 owl-carousel">
                        @foreach($products as $item)
                        <div class="single_product">
                            <div class="product_name">
                                <h3><a href="{{ route('client.show',$item->id) }}">{{ $item->name }}</a></h3>
                                <p class="manufacture_product"><a href="#">{{ $item->slug }}</a></p>
                            </div>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{ route('client.show',$item->id) }}"><img src="{{Storage::url($item->img_thumb)}}"  alt=""></a>
                                <a class="secondary_img" href="{{ route('client.show',$item->id) }}"><img src="{{Storage::url($item->img_thumb)}}" alt=""></a>
                                <div class="label_product">
                                    <span class="label_sale">-57%</span>
                                </div>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                        <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                        <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_content">
                                <div class="product_ratings">
                                    <ul>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                        <li><a href="#"><i class="ion-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product_footer d-flex align-items-center">
                                    <div class="price_box">
                                        <span class="regular_price">{{ $item->price }}</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="regular_price">{{ $item->price_sale }}</span>
                                    </div>
                                    <div class="add_to_cart">
                                        <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                    </div>
                                </div>
                                <div class="quantity_progress">
                                    <p class="product_sold">Quantity: <span>{{ $item->quantity }}</span></p>
                                    <p class="product_available">Danh mục: <span>{{ $item->category->name }}</span></p>
                                </div>
                                <div class="bar_percent">

                                </div>
                            </div>
                        </div>
                         @endforeach
                    
               
                     </div>
                 </div>
             </div>
 
         </div>
     </section>
     <!--product area end-->
 
     <!--featured categories area start-->
     <section class="featured_categories featured_c_four  mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="section_title">
                         <h2><span> <strong>Danh</strong>Mục</span></h2>
                     </div>
                     <div class="product_carousel featured_four  product_column5 owl-carousel">
                        @foreach($products as $item)
                      <div class="single_featured">
                             <div class="featured_thumb">
                                 <a href="#"><img src="{{$item->category->cover}}" alt=""></a>
                             </div>
                             <div class="featured_content">
                                 <h3 class="product_name"><a href="#">{{ $item->category->name }}</a></h3>
                                 <a class="view_more" href="#">shop now</a>
                             </div>
                         </div>
                         @endforeach
        
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--featured categories area end-->
 
     <!--product area start-->
     <section class="product_area mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="section_title">
                         <h2><span> <strong>Our</strong>Products</span></h2>
                     </div>
                     <div class="product_carousel product_column5 owl-carousel">
                        @foreach($products as $item)
                         <div class="single_product">
                             <div class="product_name">
                                 <h3><a href="product-details.html">{{ $item->name }}</a></h3>
                                 <p class="manufacture_product"><a href="#">{{ $item->slug }}</a></p>
                             </div>
                             <div class="product_thumb">
                                 <a class="primary_img" href="product-details.html"><img src="{{Storage::url($item->img_thumb)}}" alt=""></a>
                                 <a class="secondary_img" href="product-details.html"><img src="{{Storage::url($item->img_thumb)}}" alt=""></a>
                                 <div class="label_product">
                                     <span class="label_sale">-57%</span>
                                 </div>
 
                                 <div class="action_links">
                                     <ul>
                                         <li class="quick_button"><a href="#" data-bs-toggle="modal" data-bs-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                         <li class="wishlist"><a href="wishlist.html" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                         <li class="compare"><a href="compare.html" title="compare"><span class="lnr lnr-sync"></span></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="product_content">
                                 <div class="product_ratings">
                                     <ul>
                                         <li><a href="#"><i class="ion-star"></i></a></li>
                                         <li><a href="#"><i class="ion-star"></i></a></li>
                                         <li><a href="#"><i class="ion-star"></i></a></li>
                                         <li><a href="#"><i class="ion-star"></i></a></li>
                                         <li><a href="#"><i class="ion-star"></i></a></li>
                                     </ul>
                                 </div>
                                 <div class="product_footer d-flex align-items-center">
                                     <div class="price_box">
                                         <span class="regular_price">{{ $item->price }}</span>
                                     </div>
                                     <div class="add_to_cart">
                                         <a href="cart.html" title="add to cart"><span class="lnr lnr-cart"></span></a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         @endforeach
                      </div>
                 </div>
             </div>
 
         </div>
     </section>
     <!--product area end-->
 
     <!--banner area start-->
     <section class="banner_area banner_static mb-50 d-flex align-items-center" data-bgimg="assets/img/bg/banner7.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="banner_text">
                         <h2>Automotive Led</h2>
                         <h1>Headlight Kits</h1>
                         <p>HVC brings you only the best quality headlight kits</p>
                         <a href="shop.html">Discover Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--banner area end-->
 
     <!--product area start-->

     <!--product area end-->
 
     <!--brand area start-->
     <div class="brand_area mb-42">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="brand_container owl-carousel">
                         <div class="single_brand">
                             <a href="#"><img src="assets/img/brand/brand.png" alt=""></a>
                         </div>
                         <div class="single_brand">
                             <a href="#"><img src="assets/img/brand/brand1.png" alt=""></a>
                         </div>
                         <div class="single_brand">
                             <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                         </div>
                         <div class="single_brand">
                             <a href="#"><img src="assets/img/brand/brand3.png" alt=""></a>
                         </div>
                         <div class="single_brand">
                             <a href="#"><img src="assets/img/brand/brand4.png" alt=""></a>
                         </div>
                         <div class="single_brand">
                             <a href="#"><img src="assets/img/brand/brand2.png" alt=""></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!--brand area end-->
 
     <!--blog area start-->
     <section class="blog_section mb-50">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="section_title">
                         <h2><span> <strong>Latest</strong>Blogs</span></h2>
                     </div>
                     <div class="blog_carousel blog_column4 owl-carousel">
                         <div class="single_blog">
                             <div class="blog_thumb">
                                 <a href="blog-details.html"><img src="assets/img/blog/blog1.jpg" alt=""></a>
                             </div>
                             <div class="blog_content">
                                 <div class="date_post">
                                     <span>07 Feb 2019</span>
                                 </div>
                                 <h3><a href="blog-details.html">2-Bromeliad Mount Care: How to Water and Care for Mounted</a></h3>
                                 <div class="blog_desc">
                                     <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="single_blog">
                             <div class="blog_thumb">
                                 <a href="blog-details.html"><img src="assets/img/blog/blog2.jpg" alt=""></a>
                             </div>
                             <div class="blog_content">
                                 <div class="date_post">
                                     <span>05 Feb 2019</span>
                                 </div>
                                 <h3><a href="blog-details.html">Bromeliad Mount Care: How to Water and Care for Mounted</a></h3>
                                 <div class="blog_desc">
                                     <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="single_blog">
                             <div class="blog_thumb">
                                 <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                             </div>
                             <div class="blog_content">
                                 <div class="date_post">
                                     <span>04 Feb 2019</span>
                                 </div>
                                 <h3><a href="blog-details.html">Mounted Tropical Plant Care: How to Grow Tropical Plants</a></h3>
                                 <div class="blog_desc">
                                     <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="single_blog">
                             <div class="blog_thumb">
                                 <a href="blog-details.html"><img src="assets/img/blog/blog4.jpg" alt=""></a>
                             </div>
                             <div class="blog_content">
                                 <div class="date_post">
                                     <span>07 Feb 2019</span>
                                 </div>
                                 <h3><a href="blog-details.html">Plantlet Care: How To Pot Up and Care For Juvenile Houseplants</a></h3>
                                 <div class="blog_desc">
                                     <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="single_blog">
                             <div class="blog_thumb">
                                 <a href="blog-details.html"><img src="assets/img/blog/blog5.jpg" alt=""></a>
                             </div>
                             <div class="blog_content">
                                 <div class="date_post">
                                     <span>08 Feb 2019</span>
                                 </div>
                                 <h3><a href="blog-details.html">The Definitive List of Pumpkin Spice Everything fotr 2018</a></h3>
                                 <div class="blog_desc">
                                     <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                 </div>
                             </div>
                         </div>
                         <div class="single_blog">
                             <div class="blog_thumb">
                                 <a href="blog-details.html"><img src="assets/img/blog/blog3.jpg" alt=""></a>
                             </div>
                             <div class="blog_content">
                                 <div class="date_post">
                                     <span>07 Feb 2019</span>
                                 </div>
                                 <h3><a href="blog-details.html">Mounted Tropical Plant Care: How to Grow Tropical Plants</a></h3>
                                 <div class="blog_desc">
                                     <p>Virtual reality and 3-D technology are already well-established in the entertainment...</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--blog area end-->
     
 
     <!--call to action start-->
     <section class="call_to_action">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="call_action_inner">
                         <div class="call_text">
                             <h3>We Have <span>Recommendations</span> for You</h3>
                             <p>Take 30% off when you spend $150 or more with code Autima11</p>
                         </div>
                         <div class="discover_now">
                             <a href="#">discover now</a>
                         </div>
                         <div class="link_follow">
                             <ul>
                                 <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                 <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                 <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                 <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--call to action end-->
 
@endsection
