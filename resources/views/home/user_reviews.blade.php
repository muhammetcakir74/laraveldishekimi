@extends("layouts.home")
@section('title','Yorumlarım')





@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Yorumlarım</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Ana Sayfa</a>
                            <span>Üye</span>
                            <span> / Yorumlarım</span>
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
                            <li><a style="color: white;" href="{{route('profile.show')}}">Profilim</a></li>
                            <li><a style="color: white;" href="{{route('user_randevu_show')}}">Tedavilerim</a></li>
                            <li><a style="color: white;" href="{{route('myreviews')}}">Yorumlarım</a></li>
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
                <h3 style="margin-bottom: 2rem;margin-top: -4rem;">Yorumlarınız</h3>
                @include('home.message')

                <table id="customers" style="width: 100%">
                    <tr>
                        <th>Id</th>
                        <th>Tedavi</th>
                        <th>Konu</th>
                        <th>Yorum</th>
                        <th>Puan</th>
                        <th>Durum</th>
                        <th>Tarih</th>
                        <th>İşlemler</th>
                    </tr>
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td>
                                <a href="{{route('treatment',['id'=>$rs->treatment->id,'slug'=>$rs->treatment->slug])}}" target="_blank">
                                    {{$rs->treatment->title}}
                                </a>
                            </td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->review}}</td>
                            <td>{{$rs->rate}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete Are you sure ?')"><img src="{{asset('assets')}}/img/delete-button.png" width="25px"></a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
