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
                    Message Details

                </h3>
            </div>

            <div class="card-body" style="padding: 0;">

                <form action="{{route('admin_review_update',['id'=>$data->id])}}" method="post">
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
                                <label><b>Name</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->user->name}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Treatment</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->treatment->title}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Subject</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->subject}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Review</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->review}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Rate</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->rate}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>IP</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->IP}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Created Date</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->created_at}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Update Date</b></label>
                            </div>
                            <div class="col-10">
                                {{$data->updated_at}}
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="border-bottom: 1px solid gray;padding: 1rem;">
                        <div class="row">
                            <div class="col-2">
                                <label><b>Status</b></label>
                            </div>
                            <div class="col-10">
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Message</button>
                    </div>

                </form>

            </div>


        </div>
        <div class="alert">@include('home.message')</div>
    </section>

