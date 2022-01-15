@extends('layouts.admin')

@section('title','S.S.S Ekle')

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
                        S.S.S Ekle
                    </h1>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label><b>Sıra</b></label>
                            <input type="number" class="form-control" value="0" id="position" name="position">
                        </div>
                        <div class="form-group">
                            <label><b>Soru</b></label>
                            <input type="text" class="form-control" id="question"  name="question">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Cevap</b></label>
                                <textarea id="summernote" name="answer"></textarea>
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
                                <option selected>False</option>
                                <option>True</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </form>

                </div>

                <div class="card-footer">
                    --
                </div>
            </div>
        </section>
@endsection
