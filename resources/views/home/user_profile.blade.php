@extends('layouts.home')

@section('title',"Üye Profili")


@section('content')


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Üye Profili</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Ana Sayfa</a>
                            <span>Üye</span>
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
                            @php
                                use Illuminate\Support\Facades\Auth;
                                $userRoles = Auth::user()->role->pluck('name');
                            @endphp
                            @if($userRoles->contains('user'))
                                <ul>
                                    <li><a style="color: white;" href="{{route('profile.show')}}">Profilim</a></li>
                                    <li><a style="color: white;" href="{{route('user_randevu_show')}}">Tedavilerim</a></li>
                                    <li><a style="color: white;" href="{{route('myreviews')}}">Yorumlarım</a></li>
                                    <li><a style="color: white;" href="{{route('logout')}}">Çıkış</a></li>
                                </ul>
                                @elseif($userRoles->contains('admin'))
                                <ul>
                                    <li><a style="color: white;" href="{{route('profile.show')}}">Profilim</a></li>
                                    <li><a style="color: white;" href="{{route('adminhome')}}">Admin Panel</a></li>
                                    <li><a style="color: white;" href="{{route('logout')}}">Çıkış</a></li>
                                </ul>
                            @elseif($userRoles->contains('doctor'))
                                <ul>
                                    <li><a style="color: white;" href="{{route('profile.show')}}">Profilim</a></li>
                                    <li><a style="color: white;" href="{{route('doctor_randevu_show')}}">Randevularım</a></li>
                                    <li><a style="color: white;" href="{{route('logout')}}">Çıkış</a></li>
                                </ul>
                            @endif

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
