@extends('layouts.admin')

@section('title','Ödemeler')

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
                    <h3 class="text-white mb-0" style="display: inline">Ödeme Listesi</h3>
                    @include('home.message')
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Id</th>
                            <th scope="col" class="sort" data-sort="name">Hasta Adı</th>
                            <th scope="col" class="sort" data-sort="name">Doktor Adı</th>
                            <th scope="col" class="sort" data-sort="name">Tedavi Adı</th>
                            <th scope="col" class="sort" data-sort="name">Fiyat</th>
                            <th scope="col" class="sort" data-sort="name">Miktar</th>
                            <th scope="col" class="sort" data-sort="name">Ödeme</th>
                            <th scope="col" class="sort" data-sort="name">Durum</th>
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
                                            <span class="name mb-0 text-sm">{{$rs->user->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{\App\Http\Controllers\UserController::getdoctorname($rs->hekim_id)}}</span>
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
                                            <span class="name mb-0 text-sm">{{$rs->treatment->price}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->amount}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            @if($rs->payment=='Yes')
                                            <span class="name mb-0 text-sm">Ödendi</span>
                                            @else
                                                <span class="name mb-0 text-sm">Ödenmedi</span>
                                                @endif
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
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                    <div style="float: right;margin-right: 80px;margin-bottom: 20px;margin-top: 30px;"><span style="color: white">Toplam : {{$total}} TL</span></div>
                </div>
            </div>
        </div>
    </div>
@endsection
