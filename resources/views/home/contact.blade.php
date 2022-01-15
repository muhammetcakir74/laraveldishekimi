@extends("layouts.home")
@section('title','İletişim ' . $setting->title)


@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->keywords)


@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" style="margin-bottom: 20px;" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>İletişim</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Ana Sayfa</a>
                            <span>İletişim</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Telefon</h4>
                        <p>{{$setting->phone}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Adres</h4>
                        <p>{{$setting->address}}</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Çalışma Saatleri</h4>
                        <p>10:00 am to 23:00 pm</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>{{$setting->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Map Begin -->
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        <div class="map-inside">
            <i class="icon_pin"></i>
            <div class="inside-widget">
                <h4>Karabük</h4>
                <ul>
                    <li>Tel: {{$setting->phone}}</li>
                    <li>Adrs: {{$setting->address}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <!-- Contact Form Begin -->
    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("div.alert-block").fadeOut("slow", function () {
                    $("div.alert-block").remove();
                });
            }, 5000);
        });
    </script>


    <div class="contact-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact__form__title">
                        <h2>Mesaj Yaz</h2>
                    </div>
                </div>
            </div>
            <form action="{{route('sendmessage')}}" method="post">
                @include('home.message')
                @csrf
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <input type="text" placeholder="Adınız ve Soyadınız" name="name">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="text" placeholder="Telefon Numaranız" name="phone">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="email" placeholder="E-mail Adresiniz" name="email">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="text" placeholder="Konu" name="subject">
                    </div>
                    <div class="col-lg-12 text-center">
                        <textarea placeholder="Mesaj" name="message" rows="5"></textarea>
                        <button type="submit" class="site-btn">MESAJI GÖNDER</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Form End -->

@endsection
