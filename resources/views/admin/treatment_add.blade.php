@extends('layouts.admin')

@section('title','Tedavi Ekle')

@section('javascript')


    <!-- include summmernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
        <section class="content" style="margin-top: -3rem;margin-right: 3rem;margin-left: 3rem;margin-bottom: 2rem">
            <div class="card">
                <div class="card-header">
                    <h1 style="color:red;" class="card-title">
                        Tedavi Ekle
                    </h1>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_treatment_store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label><b>Kategori</b></label>
                            <select class="form-control" name="category_id">
                                <option value="0" selected>Main Treatment</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>İsim</b></label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label><b>Keywords</b></label>
                            <input type="text" class="form-control" id="keywords"  name="keywords">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Açıklama</b></label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Slug</b></label>
                                <input type="text" class="form-control" id="description" name="slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Durum</b></label>
                            <select id="status"  name="status" class="form-control">
                                <option selected>False</option>
                                <option>True</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Detay</b></label>
                                <textarea id="summernote" name="detail"></textarea>
                                <script>
                                    $(document).ready(function () {
                                       $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Fiyat</b></label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Resim</b></label>
                                <input type="file" class="form-control" id="name" name="image">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Tedaviyi Ekle</button>
                    </form>

                </div>

                <div class="card-footer">
                    --
                </div>
            </div>
        </section>
@endsection
