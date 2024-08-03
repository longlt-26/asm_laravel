<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-3">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('theme/client/assets/img/logo/logo.png') }}" alt=""></a>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <div class="middel_right">
                <div class="search-container">
                    <form action="#">
                        <div class="search_box">
                            <input placeholder="Search entire store here ..." type="text">
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </div>
                    </form>
                </div>
                <div class="middel_right_info">

                    <div class="header_wishlist">
                        <a href="wishlist.html"><span class="lnr lnr-heart"></span> Wish list </a>
                        <span class="wishlist_quantity">3</span>
                    </div>
                    <div class="mini_cart_wrapper">
                        <a href="{{ route('cart.view') }}"><span class="lnr lnr-cart"></span>My Cart </a>
                        <span class="cart_quantity">{{ $cart->totalQuantity  }}</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>