@extends('layouts.admin')

@section('title','Kategori Düzenleme')

@section('content')
        <section class="content" style="margin-top: -3rem;margin-right: 3rem;margin-left: 3rem;margin-bottom: 2rem">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:red;" class="card-title">
                        Kategori Düzenle
                    </h1>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label><b>Kategori</b></label>
                            <select id="status"  name="parent_id" class="form-control">>
                                <option value="0">Genel</option>
                                @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>İsim</b></label>
                            <input value="{{$data->title}}" type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label><b>Keywords</b></label>
                            <input value="{{$data->keywords}}" type="text" class="form-control" id="keywords"  name="keywords">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Açıklama</b></label>
                                <input value="{{$data->description}}" type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Slug</b></label>
                                <input value="{{$data->slug}}" type="text" class="form-control" id="slug" name="slug">
                            </div>
                        </div>
                        <div class="form-group">
                                <label><b>Durum</b></label>
                                <select id="status"  name="status" class="form-control">
                                    <option>{{$data->status}}</option>
                                    <option >False</option>
                                    <option>True</option>
                                </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Kategori Düzenle</button>
                    </form>

                </div>

                <div class="card-footer">
                    --
                </div>
            </div>
        </section>
@endsection
