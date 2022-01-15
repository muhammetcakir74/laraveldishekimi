<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>


<!-- Css Styles -->

<link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">

<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("div.alert").fadeOut("slow", function () {
                $("div.alert").remove();
            });
        }, 5000);
    });
</script>





    <section class="content" style="margin-top: 3rem;margin-right: 3rem;margin-left: 3rem;margin-bottom: 2rem">

        <div class="card">

            <div class="card-header">
                <h3 class="card-title">
                    Üye Rolleri

                </h3>
            </div>

            <div class="card-body" style="padding: 0;">

                <form action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post">
                    @csrf
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                        <div class="col-2">
                            <label><b>Id</b></label>
                        </div>
                        <div class="col-10">
                            {{$data->id}}
                        </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>İsim</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->name}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Email</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->email}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Roller</b></label>
                            </div>
                            <div class="col-10">
                                @foreach($data->role as $row)
                                    {{$row->name}}<a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}" onclick="return confirm('Siliniyor! Emin misiniz ? ')"><img src="{{asset('assets')}}/img/delete-button.png" width="30px"/> </a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Rol Ekle</b></label>
                            </div>
                            <div class="col-10">
                                <select name="roleid">
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Rol Ekle</button>
                    </div>

                </form>

            </div>


        </div>
        <div class="alert">@include('home.message')</div>
    </section>

