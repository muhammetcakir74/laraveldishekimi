@extends('layouts.admin')

@section('title','Üyeler')

@section('content')
    <div class="row" style="margin-top: -3rem;margin-right: 1rem;margin-left: 1rem;margin-bottom: 2rem">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0" style="display: inline">Üyeler</h3>

                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Id</th>
                            <th scope="col" class="sort" data-sort="name"></th>
                            <th scope="col" class="sort" data-sort="name">İsim</th>
                            <th scope="col" class="sort" data-sort="name">Email</th>
                            <th scope="col" class="sort" data-sort="name">Telefon</th>
                            <th scope="col" class="sort" data-sort="name">Adres</th>
                            <th scope="col" class="sort" data-sort="name">Rol</th>
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
                                            @if($rs->profile_photo_path)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px;" alt="">
                                                @endif
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->name}}</span>
                                        </div>
                                    </div>
                                </th><th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->email}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->phone}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->address}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            @foreach($rs->role as $row)
                                            <span class="name mb-0 text-sm">{{$row->name}}, </span>
                                            @endforeach
                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 witdh=1100,height=700')">
                                                <i class="nav-icon fas fa-plus-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><img src="{{asset('assets')}}/img/edit-button.png" width="30px"/></a></span>
                                        </div>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Kullanıcı siliniyor emin misiniz?')"><img src="{{asset('assets')}}/img/delete-button.png" width="30px"/></a></span>
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
