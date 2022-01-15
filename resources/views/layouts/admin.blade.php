<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
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
    @yield('css')
    @yield('javascript')
</head>

<body>

    @include('admin._navigation')
    @include('admin._header')

    @section('content')

    @show


    @include('admin._footer')


    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("div.alert-block").fadeOut("slow", function () {
                    $("div.alert-block").remove();
                });
            }, 5000);
        });
    </script>


</body>
</html>
