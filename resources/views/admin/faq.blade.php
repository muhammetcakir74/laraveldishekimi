@extends('layouts.admin')

@section('title','Sıkça Sorulan Sorular')

@section('content')
    <div class="row" style="margin-top: -3rem;margin-right: 1rem;margin-left: 1rem;margin-bottom: 2rem">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0" style="display: inline">Sıkça Sorulan Sorular</h3>
                    <script>
                        $(document).ready(function () {
                            setTimeout(function () {
                                $("div.alert-block").fadeOut("slow", function () {
                                    $("div.alert-block").remove();
                                });
                            }, 5000);
                        });
                    </script>
                    @include('home.message')
                    <a type="button" href="{{route('admin_faq_add')}}" class="btn btn-success btn-xs float-right">Soru Ekle<span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Id</th>
                            <th scope="col" class="sort" data-sort="name">Sıra</th>
                            <th scope="col" class="sort" data-sort="name">Soru</th>
                            <th scope="col" class="sort" data-sort="name">Cevap</th>
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
                                            <span class="name mb-0 text-sm">{{$rs->position}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->question}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{!! $rs->answer !!}</span>
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
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><img src="{{asset('assets')}}/img/edit-button.png" width="30px"></a></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Öğe siliniyor emin misiniz?')"><img src="{{asset('assets')}}/img/delete-button.png" width="30px"></a></span>
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
