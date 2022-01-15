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


            @livewire('randevu')



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
