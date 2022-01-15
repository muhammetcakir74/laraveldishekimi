@extends("layouts.home")
@section('title',$setting->title)


@section('description'){{$setting->description}}@endsection

@section('keywords',$setting->keywords)




@section('content')
    <div class="justify-content-center align-items-center">
        <div id="slider">
            <a href="#" class="control_next">></a>
            <a href="#" class="control_prev"><</a>
            <ul>
                @foreach($slider as $rs)
                <li>
                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" width="1500px" height="450px">
                    <h3 style="position: absolute;top:120px;right: 80px;color:#721c24;font-weight: bolder;">{{$rs->title}}</h3>
                    <h3 style="position: absolute;top:180px;right: 80px;color:#1c345d;font-weight: bolder;">{{$rs->price}} TL</h3>
                    <a class="btn btn-primary" href="{{route('treatment',['id'=>$rs->id,'slug'=>$rs->slug])}}" style="position: absolute;top:230px;right: 80px;">İncele</a>
                </li>
                @endforeach
            </ul>
        </div>

        <script  src="{{asset('assets')}}/js/script-slider.js"></script>

    </div>

    @include('home._categories')

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>En Son Eklenen Tedavilerimiz</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($last as $rs)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" height="250px">
                        </div>
                        <div class="blog__item__text">


                            <ul>
                                @php
                                    $avrgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                    $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                                @endphp
                                <li><i class="fa fa-calendar-o"></i>{{$rs->created_at}}</li>
                                <li><i class="fa fa-comment-o"></i> {{$countreview}}</li>
                                <div class="product__details__rating" style="float: right;">
                                    @for($i=1;$i<=$avrgrev;$i++)
                                        <i class="fa fa-star" style="color: #edbb0e;"></i>
                                    @endfor
                                </div>
                            </ul>
                            <div>





                                <div>
                                    <h5><a href="{{route('treatment',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h5>
                                </div>

                            </div>
                            <p>{{$rs->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 bg-primary" style="margin-bottom: 2rem;padding-top: 1rem;border-radius: 10px 10px 10px 10px;opacity: 0.7;">
                    <div class="section-title">
                        <h2 style="color: black!important;">Sizin için Seçtiğimiz Tedaviler</h2>
                    </div>

                </div>
            </div>
            <div class="row featured__filter">
                @foreach($picked as $rs)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            @php
                                $avrgrev = \App\Http\Controllers\HomeController::avrgreview($rs->id);
                                $countreview = \App\Http\Controllers\HomeController::countreview($rs->id);
                            @endphp
                            @if($countreview>0)
                            <div class="product__details__rating">

                                    @for($i=1;$i<=$avrgrev;$i++)
                                        <i class="fa fa-star" style="color: #edbb0e;"></i>
                                    @endfor
                                    <span>({{$countreview}})</span>
                            </div>
                            @endif
                            <div>
                                <div>
                                    <h6><a href="{{route('treatment',['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h6>
                                </div>



                            </div>

                            <h5>{{$rs->price}} TL</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

@endsection


