<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Greeva - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- App favicon -->
    <link class="rounded-circle" rel="icon" href="{{asset("assets/img/logo.png")}}">
    <link href="{{asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('assets/libs/dripicons/webfont/webfont.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/libs/simple-line-icons/css/simple-line-icons.css')}}"
          rel="stylesheet" type="text/css">
    <!-- App css -->
    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <style>
        body {
            font-family: "ArabicFont", sans-serif;
        }
    </style>
</head>
<body class="bg-account-pages"><!-- Login -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wrapper-page">
                    <div class="account-pages">
                        <div class="account-box"><!-- Logo box-->
                            <div class="account-logo-box">
                                <h2 class="text-uppercase text-center">
                                    <a href="#" class="text-success">
                            <span>
                                <img src="{{asset('assets/img/logo-name.png')}}" alt="" height="50"
                                     style="margin-top: 17px;">
                                <img src="{{asset('assets/img/logo.png')}}" alt="" height="100">
                            </span>
                                    </a>
                                </h2>
                            </div>
                            @yield('body')
                        </div><!-- end account-content -->
                    </div><!-- end account-box -->
                </div><!-- end account-page-->
            </div><!-- end wrapper-page -->

        </div><!-- end col -->
    </div>
    <!-- end row -->
    </div><!-- end container -->
</section><!-- END HOME --><!-- jQuery  -->
<script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script><!-- App js -->
<script src="{{asset('assets/js/jquery.core.js')}}"></script>
<script src="{{asset('assets/js/jquery.app.js')}}"></script>
</body>
</html>