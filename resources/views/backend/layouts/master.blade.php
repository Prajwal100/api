<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('backend/assets/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/assets/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('backend/assets/css/main.min.css')}}" rel="stylesheet" />
    @yield('styles')
    <!-- PAGE LEVEL STYLES-->
</head>


<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        @include('backend.layouts.header')
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
       @include('backend.layouts.sidebar')
        <!-- END SIDEBAR-->
        @yield('main-content')
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <script src="{{asset('backend/assets/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('backend/assets/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('backend/assets/js/app.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('backend/assets/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>
    @yield('scripts')

    <script>
        setTimeout(function(){
            $('.alert').slideUp();
        },4000);
    </script>
</body>


</html>