@extends("layouts.home")
@section('title',$data->title . " Randevusu Al")





@section('content')
    <div class="container" style="padding-left: 0px!important;padding-right: 0px!important;margin-bottom: 10px;">
        <div class="text-center" style="padding-top:2rem;padding-bottom:2rem;background-color: black;border-radius: 15px 15px 0 0;">
            <span style="color: white;font-size: 2rem;">{{$data->title}} Randevusu için bilgileri giriniz.</span>
        </div>
    </div>
    @include('home.message')
    <div class="container" style="padding-top: 2rem;padding-bottom:1rem;margin-bottom: 4rem;background-color: #1c345d;border-radius: 0 0 15px 15px;">
    <div style=" padding-left: 30rem">
        <form action="{{route('randevu_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf


            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label style="color: whitesmoke"> Randevu Tarihi : </label></div>
                    <div class="col-md-3"><input type="date" class="form-control" id="date" name="date"></div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label style="color: whitesmoke">Randevu Saati : </label></div>
                    <div class="col-md-2">
                        <select id="time" name="time">
                            <option value="--">SAAT SEÇİNİZ</option>
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
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label style="color: whitesmoke">Doktor : </label></div>
                    <div class="col-md-3">
                        <select id="doctor" name="doctor">
                            <option value="--">DOKTOR SEÇİNİZ</option>
                            @foreach($datalist as $rs)
                                @if($rs->role->pluck('name')->contains('doctor'))
                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"><label style="color: whitesmoke">Doktora Mesajınız : </label></div>
                    <div class="col-md-3">
                        <textarea class="form-control" id="note" rows="3" name="note"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div style="margin-left: 200px;"><button class="btn btn-primary" type="submit">Randevu Al</button></div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    </div>
@endsection
