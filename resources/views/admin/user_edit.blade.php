@extends('layouts.admin')

@section('title','Üye Düzenle')

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
                        Üye Düzenle
                    </h3>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label><b>İsim</b></label>
                            <input type="text" class="form-control" value="{{$data->name}}" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="text" class="form-control" id="email" value="{{$data->email}}" name="email">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Telefon</b></label>
                                <input type="text" class="form-control" id="phone" value="{{$data->phone}}" name="phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Adres</b></label>
                                <input type="text" class="form-control" id="address" value="{{$data->address}}" name="address">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Resim</b></label>
                                <input type="file" class="form-control" id="image" name="image">

                                @if($data->profile_photo_path)
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                    @endif

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Üyeyi Düzenle</button>
                    </form>

                </div>

                <div class="card-footer">
                    --
                </div>
            </div>
        </section>
@endsection
