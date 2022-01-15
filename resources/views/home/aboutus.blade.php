@extends("layouts.home")
@section('title','Hakkımızda ' . $setting->title)


@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->keywords)


@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="margin-bottom: 20px;" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Hakkımızda</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Ana Sayfa</a>
                            <span>Hakkımızda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="hero">
        <div class="container">
            <div class="row">
                {!! $setting->aboutus !!}
            </div>
        </div>
    </section>

@endsection
