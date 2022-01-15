@extends("layouts.home")
@section('title',$data->title . "")


@section('description'){{$data->description}}@endsection

@section('keywords',$data->keywords)


@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>{{$data->title}}</h2>
                        <div class="breadcrumb__option">
                            <a href="{{route('home')}}">Home</a>
                            <span>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->category->title)}} / </span>
                            <span>{{$data->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                 src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            @foreach($datalist as $rs)
                            <img data-imgbigurl="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                 src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" alt="" height="82.5px">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{$data->title}}</h3>
                        @php
                        $avrgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                        $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                        @endphp
                        <div class="product__details__rating">
                            @for($i=1;$i<=$avrgrev;$i++)
                                <i class="fa fa-star" style="color: #edbb0e;"></i>
                            @endfor
                            <span>{{$countreview}} Yorum(lar) {{$avrgrev}}</span>
                        </div>
                        <div class="product__details__price">{{$data->price}} ₺</div>
                        <p>{{$data->description}}</p>

                        <a href="{{route('randevu_main',['id'=>$data->id])}}" class="primary-btn">RANDEVU AL</a>


                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                   aria-selected="true">Açıklama</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                   aria-selected="false">Bilgi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                   aria-selected="false">Yorumlar <span>({{$countreview}})</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Tedavi Bilgisi</h6>
                                    <p>{!! $data->detail !!}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Tedavi Bilgisi</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                        sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                        eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                        sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                        diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                        Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                        Proin eget tortor risus.</p>
                                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="product-reviews" style="border: 1px solid darkgrey;border-radius: 5px 5px 5px 5px;padding: 20px;background-color: #0c9cb7;">
                                                @if($countreview>0)
                                                    @foreach($reviews as $rs)
                                                        <div class="single-review" style="border-bottom: 1px solid darkgrey;margin-bottom: 10px;">
                                                            <div class="review-heading" style="overflow: auto;overflow-y: hidden;">
                                                                <div style="float: left;"><span style="text-decoration: none;"><i class="fa fa-user-o" style="margin-right: 8px;"></i>{{$rs->user->name}}</span></div>
                                                                <div style="float: left;margin-left: 25px;"><span><i class="fa fa-clock-o" style="margin-right: 8px;"></i>{{$rs->created_at}}</span></div>
                                                                <div class="review-reating float-right">
                                                                    @for($i=1;$i<=$rs->rate;$i++)
                                                                        <i class="fa fa-star" style="color: #edbb0e;"></i>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                            <div class="review-body" style="margin-top: 7px;">
                                                                <strong>{{$rs->subject}}</strong>
                                                                <p style="margin-top: 7px;color: white;">{{$rs->review}}</p>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <div class="text-center"><h3 style="color: white;">Bu tedaviye hiç yorum yapılmamış</h3></div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                        @livewire('review',['id'=>$data->id])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

@endsection
