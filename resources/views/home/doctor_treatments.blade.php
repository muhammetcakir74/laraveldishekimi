@extends("layouts.home")
@section('title','Randevularınız')





@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Randevular</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Ana Sayfa</a>
                            <span>Üye</span>
                            <span> / Randevular</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                    <div class="sidebar__item p-3 mb-2 bg-dark text-white" style=" border-radius: 10px 10px 10px 10px;">
                        <h4 class="text-danger" style="border-bottom: 4px solid white;margin-bottom: 10px!important;padding-bottom: 10px;">Üye Paneli</h4>
                        <ul>
                            <li><a style="color: white;" href="{{route('profile.show')}}">Profilin</a></li>
                            <li><a style="color: white;" href="{{route('doctor_randevu_show')}}">Randevularım</a></li>
                            <li><a style="color: white;" href="{{route('logout')}}">Çıkış</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <script>
                $(document).ready(function () {
                    setTimeout(function () {
                        $("div.alert-block").fadeOut("slow", function () {
                            $("div.alert-block").remove();
                        });
                    }, 5000);
                });
            </script>


            <div class="col-lg-9 col-md-7">
                <h3 style="margin-bottom: 2rem;margin-top: -4rem;">Randevularınız</h3>
                @include('home.message')

                <table id="customers" style="width: 100%;">
                    <tr>
                        <th>Hasta Adı</th>
                        <th>Tedavi Adı</th>
                        <th>Tarih</th>
                        <th>Saat</th>
                        <th>Hasta Notu</th>
                        <th>Onay</th>
                    </tr>
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->treatment->title}}</td>
                            <td>{{$rs->date}}</td>
                            <td>{{$rs->time}}</td>
                            <td>{{$rs->note}}</td>
                            <td>
                                @if($rs->status=='Onaylandı')
                                    <img src="{{asset('assets')}}/img/onay-button.png" width="30px"><span>Onaylandı</span>
                                @else
                                    <img src="{{asset('assets')}}/img/cancel-button.png" width="30px"><span>Onaylanmadı</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
