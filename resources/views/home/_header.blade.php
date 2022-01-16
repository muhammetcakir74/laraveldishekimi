<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{asset('assets')}}/img/language.png" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Spanis</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            @auth
            <a href="{{route('profile.show')}}"><i class="fa fa-user"></i>Profil Görüntüle</a>
            @endauth
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="/home">Ana Sayfa</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        @if ($setting->facebook != null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
           @if ($setting->twitter != null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
           @if ($setting->youtube != null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube-play"></i></a> @endif
           @if ($setting->instagram != null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i>{{$setting->email}}</li>
                            <li></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            @if ($setting->facebook != null) <a href="{{$setting->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a> @endif
                            @if ($setting->twitter != null) <a href="{{$setting->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a> @endif
                            @if ($setting->youtube != null) <a href="{{$setting->youtube}}" target="_blank"><i class="fa fa-youtube-play"></i></a> @endif
                            @if ($setting->instagram != null) <a href="{{$setting->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a> @endif
                        </div>

                        <div class="header__top__right__auth">
                            @auth
                                <a href="{{route('profile.show')}}"><i class="fa fa-user"></i>Profili Görüntüle</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6" style="text-align: center;">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{route('home')}}">ANA SAYFA</a></li>
                        <li><a href="{{route('aboutus')}}">HAKKIMIZDA</a></li>
                        <li><a href="{{route('references')}}">REFERANSLAR</a></li>
                        <li><a href="{{route('faq')}}">SSS</a></li>
                        <li><a href="{{route('contact')}}">İLETİŞİM</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                @auth

                    <div style="margin-left: 170px !important;margin-top: 20px; width: 250px;">
                        <div style="float: left; padding: 10px 10px;"> @if(\Illuminate\Support\Facades\Auth::user()->profile_photo_path)
                                <img src="{{\Illuminate\Support\Facades\Storage::url(\Illuminate\Support\Facades\Auth::user()->profile_photo_path)}}" style="border-radius: 10px;height: 50px" alt="">
                            @else
                                <div><i class="fa fa-user-o" style="float: left;padding: 15px 15px;"></i></div>
                            @endif</div>
                        <div style="float: left!important;">
                            <a href="#" class="text-center" style="color: #0a0c0d;float: left;"><b>{{\Illuminate\Support\Facades\Auth::user()->name}}</b></a><br>
                            <a href="{{route('logout')}}" class="text-center" style="color: #0a0c0d;font-size: 15px;"><i class="fa fa-power-off" aria-hidden="true"></i>    Çıkış</a>
                        </div>
                    </div>
                    @endauth
                    @guest()
                        <div style="margin-left: 180px !important;margin-top: 20px;">
                            <div><i class="fa fa-user-o" style="float: left;padding: 15px 15px;"></i></div>
                            <div style="">
                                <a href="#" class="text-center" style="color: #0a0c0d;float: left;"><b>HESABIM</b></a><br>
                                <a href="/login" class="text-center" style="color: #0a0c0d;font-size: 15px;">GİRİŞ / </a><a href="/register" class="text-center" style="color: #0a0c0d;font-size: 15px;">KAYIT</a>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->

