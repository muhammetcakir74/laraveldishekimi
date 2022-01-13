@extends('layouts.admin')

@section('title','Edit Treatment')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summmernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')
        <section class="content" style="margin-top: -3rem;margin-right: 3rem;margin-left: 3rem;margin-bottom: 2rem">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Edit Treatment
                    </h3>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_treatment_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label><b>Category</b></label>
                            <select name="category_id" class="form-control">
                                <option value="0" selected>Main Treatment</option>
                                @foreach($datalist as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Title</b></label>
                            <input type="text" class="form-control" value="{{$data->title}}" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label><b>Keywords</b></label>
                            <input type="text" class="form-control" id="keywords" value="{{$data->keywords}}" name="keywords">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Description</b></label>
                                <input type="text" class="form-control" id="description" value="{{$data->description}}" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Slug</b></label>
                                <input type="text" class="form-control" id="description" value="{{$data->slug}}" name="slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Status</b></label>
                            <select id="status"  name="status" class="form-control">
                                <option selected>{{$data->status}}</option>
                                <option>False</option>
                                <option>True</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Detail</b></label>
                                <textarea id="summernote" name="detail">{{$data->detail}}</textarea>
                                <script>
                                    $(document).ready(function () {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Price</b></label>
                                <input type="number" value="{{$data->price}}" class="form-control" id="price" name="price">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Edit Treatment</button>
                    </form>

                </div>

                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
@endsection
