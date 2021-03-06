@php
    $setting = \App\Http\Controllers\HomeController::getSettings()
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <script src="{{asset('assets')}}/js/jquery-3.3.1.min.js"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">

</head>
<link rel="stylesheet" href="{{asset('assets')}}/css/style-slider.css" type="text/css">

<body>

@include('home._header')



@include('home._navigation')

@section('content')

@show



@include('home._footer')




</body>
</html>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $("div.alert-block").fadeOut("slow", function () {
                $("div.alert-block").remove();
            });
        }, 5000);
    });
</script>
