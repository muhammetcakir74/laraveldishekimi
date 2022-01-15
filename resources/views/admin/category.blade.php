@extends('layouts.admin')

@section('title','Kategoriler')

@section('content')
    <div class="row" style="margin-top: -3rem;margin-right: 1rem;margin-left: 1rem;margin-bottom: 2rem">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0" style="display: inline">Kategoriler</h3>
                    <a type="button" href="{{route('admin_category_add')}}" class="btn btn-success btn-xs float-right">Kategori Ekle<span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Id</th>
                            <th scope="col" class="sort" data-sort="name">Parent</th>
                            <th scope="col" class="sort" data-sort="name">İsim</th>
                            <th scope="col" class="sort" data-sort="name">Durum</th>
                            <th scope="col" class="sort" data-sort="name">Düzenle</th>
                            <th scope="col" class="sort" data-sort="name">Sil</th>
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
                                            <span class="name mb-0 text-sm">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->title}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->status}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_category_edit',['id'=>$rs->id])}}"><img src="{{asset('assets')}}/img/edit-button.png" width="30px"></a></span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Öğe siliniyor emin misiniz?')"><img src="{{asset('assets')}}/img/delete-button.png" width="30px"></a></span>
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
