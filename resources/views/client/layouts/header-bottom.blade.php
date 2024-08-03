<div class="container">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="main_menu header_position">
                <nav>
                    <ul>
                        <li><a href="{{ asset('theme/client/index.html') }}">Home<i class="fa fa-angle-down"></i></a>
                            {{-- <ul class="sub_menu">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                                <li><a href="index-5.html">Home 5</a></li>
                                <li><a href="index-6.html">Home 6</a></li>
                                <li class="home7new"><a href="index-7.html">Home 7</a><span>new</span></li>
                            </ul> --}}
                        </li>
                        <li><a href="">Category<i class="fa fa-angle-down"></i></a>
                            <ul class="sub_menu">
                                @foreach(App\Models\Category::query()->get() as $item)
                                <li><a href="">{{ $item->name }}</a></li>
                                {{-- <li><a href="">Adidas</a></li> --}}
                                @endforeach
                               
                                
                            </ul>
                        </li>
                   
                        <li><a href="{{ asset('theme/client/blog.html') }}">Posts<i class="fa fa-angle-down"></i></a>
                            
                        </li>
                        <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                            <ul class="sub_menu pages">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="{{ route('login') }}">login</a></li>
                                <li><a href="compare.html">compare</a></li>
                                <li><a href="privacy-policy.html">privacy policy</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">about Us</a></li>
                        <li><a href="contact.html"> Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>