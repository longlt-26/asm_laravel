<div class="container">
    <div class="top_inner">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="follow_us">
                    <label>Follow Us:</label>
                    <ul class="follow_link">
                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="top_right text-end">
                    <ul>
                        <li class="top_links">
                            @if (Auth::check())
                            <a href=""><i class="ion-android-person"></i> {{ Auth::user()->name }}<i class="ion-ios-arrow-down"></i></a>  
                          @else
                          <a href="{{ route('login') }}"><i class="ion-android-person"></i> Login<i class="ion-ios-arrow-down"></i></a>
                          @endif
                            <ul class="dropdown_links">
                                <li><a href="{{ route('logout') }}">Checkout </a></li>
                                <li><a href="{{ asset('theme/client/my-account.html') }}">My Account </a></li>
                                <li><a href="{{ route('cart.view') }}">Shopping Cart</a></li>
                                <li><a href="{{ asset('theme/client/wishlist.html') }}">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="language"><a href="#"><img src="assets/img/logo/language.png" alt="">en-gb<i class="ion-ios-arrow-down"></i></a>
                            <ul class="dropdown_language">
                                <li><a href="#"><img src="assets/img/logo/language.png" alt=""> English</a></li>
                                <li><a href="#"><img src="assets/img/logo/language2.png" alt=""> Germany</a></li>
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
            </div>
        </div>
    </div>
</div>