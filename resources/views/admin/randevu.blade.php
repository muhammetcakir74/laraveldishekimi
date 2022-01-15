@extends('layouts.admin')

@section('title','Randevular')

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
                    <h3 class="text-white mb-0" style="display: inline">Randevu Listesi</h3>
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
                            <th scope="col" class="sort" data-sort="name">Tarih</th>
                            <th scope="col" class="sort" data-sort="name">Saat</th>
                            <th scope="col" class="sort" data-sort="name">IP</th>
                            <th scope="col" class="sort" data-sort="name">Hasta Notu</th>
                            <th scope="col" class="sort" data-sort="name">Durum</th>
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
                                            <span class="name mb-0 text-sm">{{$rs->user->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{\App\Http\Controllers\UserController::getdoctorname($rs->doctor_id)}}</span>
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
                                            <span class="name mb-0 text-sm">{{$rs->date}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->time}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->IP}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->note}}</span>
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
                                        @if($rs->status=='Onaylanmadı')
                                        <div class="media-body">
                                            <span><a href="{{route('admin_randevu_approval',['id'=>$rs->id])}}"><img src="{{asset('assets')}}/img/onay-button.png" width="30px"></a></span>
                                        </div>
                                        @endif
                                        @if($rs->status=='Onaylandı')
                                        <div class="media-body">
                                            <span><a href="{{route('admin_randevu_approval_cancel',['id'=>$rs->id])}}"><img src="{{asset('assets')}}/img/cancel-button.png" width="30px"></a></span>
                                        </div>
                                            @endif
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_randevu_edit',['id'=>$rs->id])}}"><img src="{{asset('assets')}}/img/edit-button.png" width="30px"></a></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_randevu_delete',['id'=>$rs->id])}}" onclick="return confirm('Siliniyor Emin misinizi?')"><img src="{{asset('assets')}}/img/delete-button.png" width="30px"></a></span>
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
