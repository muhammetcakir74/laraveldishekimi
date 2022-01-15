@extends("layouts.home")
@section('title','Sıkça Sorulan Sorular')





@section('content')


    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sıkça Sorulan Sorular</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}" style="color: orange;">Home</a>
                            <span style="color: #b1dfbb;">Sıkça Sorulan Sorular</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion" style="margin-bottom: 4rem;margin-top: 4rem;">
                        @foreach($datalist as $rs)

                                    <h3>{{$rs->question}}</h3>
                                <div><p>{!! $rs->answer !!}</p></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
