@extends('layouts.admin')

@section('title','Yorumlar')

@section('content')

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("div.alert-block").fadeOut("slow", function () {
                    $("div.alert-block").remove();
                });
            }, 5000);
        });
    </script>


    <div class="row" style="margin-top: -3rem;margin-right: 1rem;margin-left: 1rem;margin-bottom: 2rem">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0" style="display: inline">Yorumlar</h3>
                    @include('home.message')
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Id</th>
                            <th scope="col" class="sort" data-sort="name">İsim</th>
                            <th scope="col" class="sort" data-sort="name">Tedavi</th>
                            <th scope="col" class="sort" data-sort="name">Konu</th>
                            <th scope="col" class="sort" data-sort="name">Yorum</th>
                            <th scope="col" class="sort" data-sort="name">Puan</th>
                            <th scope="col" class="sort" data-sort="name">Durum</th>
                            <th scope="col" class="sort" data-sort="name">Tarih</th>
                            <th scope="col" class="sort" data-sort="name">İşlemler</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($datalist as $rs)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->id}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span>
                                                <a href="{{route('treatment',['id'=>$rs->treatment->id,'slug'=>$rs->treatment->slug])}}" target="_blank">
                                                {{$rs->treatment->title}}
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->subject}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->review}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->rate}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->status}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->created_at}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 witdh=200,height=200')"><img src="{{asset('assets')}}/img/edit-button.png" width="30px"></a></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Siliniyor Emin misinizi?')"><img src="{{asset('assets')}}/img/delete-button.png" width="30px"></a></span>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
