<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('assets')}}/admin/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/argon.css?v=1.2.0" type="text/css">



</head>

<body class="bg-default">

<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <img src="{{asset('assets')}}/img/logo.png">
                        <h1 class="text-white">Hoş Geldiniz</h1>

                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">

                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                        </div>
                        <form action="{{route('admin_logincheck')}}" method="post" role="form">
                            @csrf
                            <div class="form-group mb-3">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>

                                    @include('home.message')

                                    <input class="form-control" placeholder="Email" type="email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Şifre" type="password" name="password">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">GİRİŞ</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets')}}/admin/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/js-cookie/js.cookie.js"></script>
<script src="{{asset('assets')}}/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="{{asset('assets')}}/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="{{asset('assets')}}/admin/js/argon.js?v=1.2.0"></script>

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
