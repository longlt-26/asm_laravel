@extends('login.layouts.master')
@section('content')
<div class="customer_login mt-32">
    <div class="container">
        <div class="row justify-content-center">
            <!--login area start-->
            <div class="col-lg-6 col-md-6">
                <div class="account_form">
                    <h2>login</h2>
                            @if ($message = Session::get('error'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>	
                                                <strong>{{ $message }}</strong>
                                        </div>
                            @endif
                           
                    <form action="#" method="POST">
                        @csrf
                        <p>
                            <label>Email <span>*</span></label>
                            <input type="email" name="email">
                        </p>
                        <p>
                            <label>Passwords <span>*</span></label>
                            <input type="password" name="password">
                        </p>
                        <div class="login_submit">
                            <a href="#">Lost your password?</a>
                            <label for="remember">
                                <input id="remember" type="checkbox">
                                Remember me
                            </label>
                            
                           

                        </div>
                        <button type="submit">login</button>

                    </form>
                    <a href="{{ route('register') }}"><button type="submit">Register</button></a>
                
                </div>
            </div>
            <!--login area start-->

      
        </div>
    </div>
</div>
<!-- customer login end -->

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
@endsection