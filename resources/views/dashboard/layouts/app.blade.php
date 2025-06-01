<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Admin Dashboard </title>
    <link rel="apple-touch-icon" href="{{asset('public/dashboard/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/dashboard/images/ico/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/vendors/css/vendors-rtl.min.css')}}">
    <link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public/dashboard/vendors/css/extensions/shepherd-theme-default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public/dashboard/vendors/css/extensions/tether-theme-arrows.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/vendors/css/extensions/tether.min.css')}}">
    <!-- END: Vendor CSS-->
    <!-- END: Vendor CSS-->
    <link rel="stylesheet" href="{{asset('front/css/jquery.fancybox.css')}}">
    <!-- BEGIN: Theme CSS-->
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public/dashboard/css/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/themes/semi-dark-layout.css')}}">
    {{--    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/pages/card-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/plugins/tour/tour.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public/dashboard/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/pages/dashboard-analytics.css')}}">
    <!-- END: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/plugins/file-uploaders/dropzone.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/style-rtl.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.css"
          integrity="sha512-UoT/Ca6+2kRekuB1IDZgwtDt0ZUfsweWmyNhMqhG4hpnf7sFnhrLrO0zHJr2vFp7eZEvJ3FN58dhVx+YMJMt2A=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>


    <!-- BEGIN: Custom CSS-->

    @yield('style')
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  "
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

<!-- BEGIN: Header-->
@include('dashboard.layouts.includes.header')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('dashboard.layouts.includes.menu')
<!-- END: Main Menu-->

<!-- BEGIN: Content -->


<!-- Dashboard Analytics Start -->
@yield('content')
<!-- Dashboard Analytics end -->


<!-- END: Content-->


<!-- BEGIN: Footer-->
@include('dashboard.layouts.includes.footer')
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->


@yield('scripts')
<script
    src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>

<script src="{{asset('public/dashboard/vendors/js/vendors.min.js')}}"></script>

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('public/dashboard/vendors/js/charts/apexcharts.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/js/extensions/tether.min.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/js/extensions/shepherd.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('public/dashboard/js/core/app-menu.js')}}"></script>
<script src="{{asset('public/dashboard/js/core/app.js')}}"></script>
<script src="{{asset('public/dashboard/js/scripts.js')}}"></script>
<script src="{{asset('public/dashboard/js/scripts/components.js')}}"></script>


<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('public/dashboard/js/scripts/pages/dashboard-analytics.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/js/extensions/dropzone.min.js')}}" type="text/javascript"></script>

<script src="{{asset('public/dashboard/js/scripts/datatables/datatable.js')}}"></script>
<script src="{{asset('public/dashboard/vendors/js/tables/datatable/datatables.min.js')}}"></script>
{{--    <script src="{{asset('public/dashboard/ckeditor5-build-classic/ckeditor.js')}}"></script>--}}

<script src="{{asset('front/css/jquery.fancybox.js')}}"></script>
<script src="{{asset('front/js/lightbox.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pannellum/2.5.6/pannellum.js"
        integrity="sha512-EmZuy6vd0ns9wP+3l1hETKq/vNGELFRuLfazPnKKBbDpgZL0sZ7qyao5KgVbGJKOWlAFPNn6G9naB/8WnKN43Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
