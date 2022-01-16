@extends('layouts.admin')

@section('title','Randevu Düzenle')

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
                        Randevu Düzenle
                    </h1>
                </div>
                @include('home.message')
                <div class="card-body">

                    <form action="{{route('admin_randevu_update',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label><b>Tedavi</b></label>
                            <select name="treatment_id" class="form-control">
                                @foreach($treatments as $rs)
                                    <option value="{{$rs->id}}" @if ($rs->id == $data->treatment_id) selected="selected" @endif>
                                        {{$rs->title}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Hasta Adı</b></label>
                            <input type="text" class="form-control" value="{{$data->user->name}}" disabled>
                        </div>
                        <div class="form-group">
                            <label><b>Doktor Adı</b></label>
                            <select id="doctor_id" name="doctor_id" class="form-control">
                                @foreach($users as $rs)
                                    @if($rs->role->pluck('name')->contains('doctor'))
                                        <option value="{{$rs->id}}"@if ($rs->id == $data->doctor_id) selected="selected" @endif>{{$rs->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Tarih</b></label>
                                <input type="date" class="form-control" id="date" name="date" value="{{$data->date}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Saat</b></label>
                                <select id="time" name="time" class="form-control">
                                    <option value="{{$data->time}}" selected>{{$data->time}}</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:15">08:15</option>
                                    <option value="08:30">08:30</option>
                                    <option value="08:45">08:45</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:15">09:15</option>
                                    <option value="09:30">09:30</option>
                                    <option value="09:45">09:45</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:15">10:15</option>
                                    <option value="10:30">10:30</option>
                                    <option value="10:45">10:45</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:15">11:15</option>
                                    <option value="11:30">11:30</option>
                                    <option value="11:45">11:45</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:15</option>
                                    <option value="13:30">13:30</option>
                                    <option value="13:45">13:45</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:15">14:15</option>
                                    <option value="14:30">14:30</option>
                                    <option value="14:45">14:45</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:15">15:15</option>
                                    <option value="15:30">15:30</option>
                                    <option value="15:45">15:45</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:15">16:15</option>
                                    <option value="16:30">16:30</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Hasta Notu</b></label>
                                <textarea id="summernote" name="note">{{$data->note}}</textarea>
                                <script>
                                    $(document).ready(function () {
                                        $('#summernote').summernote();
                                    });
                                </script>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-primary">Randevuyu Düzenle</button>
                    </form>

                </div>

                <div class="card-footer">
                    --
                </div>
            </div>
        </section>
@endsection
