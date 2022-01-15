@extends('layouts.admin')

@section('title','S.S.S Düzenle')

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
                    <h1 style="color: red;" class="card-title">
                        S.S.S Düzenle
                    </h1>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label><b>Sıra</b></label>
                            <input type="number" class="form-control" value="{{$data->position}}" id="position" name="position">
                        </div>
                        <div class="form-group">
                            <label><b>Soru</b></label>
                            <input type="text" class="form-control" id="question"  name="question" value="{{$data->question}}">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Cevap</b></label>
                                <textarea id="summernote" name="answer">{{$data->answer}}</textarea>
                                <script>
                                    $(document).ready(function () {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Durum</b></label>
                            <select id="status"  name="status" class="form-control">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Düzenle</button>
                    </form>

                </div>

                <div class="card-footer">
                    --
                </div>
            </div>
        </section>
@endsection
