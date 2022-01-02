<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets')}}/admin/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/argon.css?v=1.2.0" type="text/css">

    <title>Image Gallery</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Treatment : <span style="color: #00BB33;">{{$data->title}}</span>
        </h3>
    </div>

    <div class="card-body">

        <form action="{{route('admin_image_store',['treatment_id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label><b>Title</b></label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label><b>Image</b></label>
                    <input type="file" class="form-control" id="name" name="image">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Image</button>
        </form>

    </div>



    <div class="table-responsive"  style="padding-left: 2rem;padding-right: 2rem;">
        <table class="table align-items-center table-dark table-flush">
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="sort" data-sort="name">Id</th>
                <th scope="col" class="sort" data-sort="name">Title(s)</th>
                <th scope="col" class="sort" data-sort="name" style="text-align: center;">Image</th>
                <th scope="col" class="sort" data-sort="name" style="text-align: center">Delete</th>
            </tr>
            </thead>
            <tbody class="list">
            @foreach($images as $rs)
                <tr>
                    <th scope="row">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="name mb-0 text-sm">{{$rs->id}}</span>
                            </div>
                        </div>
                    </th>
                    <th scope="row">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="name mb-0 text-sm">{{$rs->title}}</span>
                            </div>
                        </div>
                    </th>
                    <th scope="row" style="text-align: center;">
                        <div class="media align-items-center">
                            <div class="media-body">
                                            <span class="name mb-0 text-sm">
                                            @if ($rs->image)
                                                    <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" height="80px">
                                                @endif
                                            </span>
                            </div>
                        </div>
                    </th>
                    <th scope="row" style="text-align: center">
                        <div class="media align-items-center">
                            <div class="media-body">
                                <span class="name mb-0 text-xl"><a href="{{route('admin_image_delete',['id'=>$rs->id,'treatment_id'=>$data->id])}}" onclick="return confirm('Record will be delete Are you sure?')"><i class="ni ni-basket text-white"></i></a></span>
                            </div>
                        </div>
                    </th>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>




    <div class="card-footer">
        Footer
    </div>
</div>

</body>
</html>
