@extends("layouts.home")
@section('title',$setting->title)


@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->keywords)


@section('content')
    <div class="hero__item set-bg justify-content-center align-items-center" data-setbg="{{asset('assets')}}/img/hero/banner.jpg">
        <div class="hero__text text-center">
            <span>FRUIT FRESH</span>
            <h2>Vegetable <br />100% Organic</h2>
            <p>Free Pickup and Delivery Available</p>
            <a href="#" class="primary-btn">SHOP NOW</a>
        </div>
    </div>

    @include('home._categories')
@endsection


