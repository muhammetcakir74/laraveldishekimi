@extends('layouts.home')

@section('title',"User Profile")


@section('content')


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>User Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>User</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item p-3 mb-2 bg-dark text-white" style=" border-radius: 10px 10px 10px 10px;">
                            <h4 class="text-danger" style="border-bottom: 4px solid white;margin-bottom: 10px!important;padding-bottom: 10px;">User Panel</h4>
                            <ul>
                                <li><a style="color: white;" href="{{route('myprofile')}}">My Profile</a></li>
                                <li><a style="color: white;" href="#">My Orders</a></li>
                                <li><a style="color: white;" href="#">My Reviews</a></li>
                                <li><a style="color: white;" href="#">My Shopcart</a></li>
                                <li><a style="color: white;" href="#">My Messages</a></li>
                                <li><a style="color: white;" href="{{route('logout')}}">Logout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    @include('profile.show')
                </div>
        </div>
    </section>
    <!-- Product Section End -->


@endsection
