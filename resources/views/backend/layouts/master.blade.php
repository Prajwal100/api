<!DOCTYPE html>
<html lang="en">


@include('backend.layouts.head')


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
    @include('backend.layouts.footer')
</body>


</html>