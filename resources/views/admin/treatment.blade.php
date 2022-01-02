@extends('layouts.admin')

@section('title','Treatment List')

@section('content')
    <div class="row" style="margin-top: -3rem;margin-right: 1rem;margin-left: 1rem;margin-bottom: 2rem">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0" style="display: inline">Treatments</h3>
                    <a type="button" href="{{route('admin_treatment_add')}}" class="btn btn-success btn-xs float-right">Add Treatment<span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Id</th>
                            <th scope="col" class="sort" data-sort="name">Category</th>
                            <th scope="col" class="sort" data-sort="name">Title(s)</th>
                            <th scope="col" class="sort" data-sort="name">Status</th>
                            <th scope="col" class="sort" data-sort="name">Price</th>
                            <th scope="col" class="sort" data-sort="name">Image</th>
                            <th scope="col" class="sort" data-sort="name" style="text-align: center;">Image Gallery</th>
                            <th scope="col" class="sort" data-sort="name">Edit</th>
                            <th scope="col" class="sort" data-sort="name">Delete</th>
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
                                            <span class="name mb-0 text-sm">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</span>
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
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$rs->price}}</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">
                                            @if ($rs->image)
                                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="50px" width="50px" alt="">
                                            @endif
                                            </span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row" style="text-align: center;">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-xl"><a href="{{route('admin_image_add',['treatment_id'=>$rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 witdh=1100,height=700')"><i class="ni ni-album-2 text-white"></i></a></span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_treatment_edit',['id'=>$rs->id])}}">Edit</a></span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm"><a href="{{route('admin_treatment_delete',['id'=>$rs->id])}}" onclick="return confirm('Öğe siliniyor emin misiniz?')">Delete</a></span>
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
