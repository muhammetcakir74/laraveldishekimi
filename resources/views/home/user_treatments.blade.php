@extends("layouts.home")
@section('title','Your Treatments')





@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Apointments</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>User</span>
                            <span> / Apointments</span>
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
                        <h4 class="text-danger" style="border-bottom: 4px solid white;margin-bottom: 10px!important;padding-bottom: 10px;">User Panel</h4>
                        <ul>
                            <li><a style="color: white;" href="{{route('profile.show')}}">My Profile</a></li>
                            <li><a style="color: white;" href="{{route('doctor_randevu_show')}}">My Treatments</a></li>
                            <li><a style="color: white;" href="{{route('logout')}}">Logout</a></li>
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
                <h3 style="margin-bottom: 2rem;margin-top: -4rem;">Your Apointments</h3>
                @include('home.message')

                <table id="customers" style="width: 100%;">
                    <tr>
                        <th>Hasta Adı</th>
                        <th>Tedavi Adı</th>
                        <th>Tarih</th>
                        <th>Saat</th>
                        <th>Hasta Notu</th>
                    </tr>
                    @foreach($datalist as $rs)
                        <tr>
                            <td>{{$rs->user->name}}</td>
                            <td>{{$rs->treatment->title}}</td>
                            <td>{{$rs->date}}</td>
                            <td>{{$rs->time}}</td>
                            <td>{{$rs->note}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
