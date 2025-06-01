<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title> Dashboard    </title>
    <link rel="apple-touch-icon" href="{{asset('public/dashboard/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/dashboard/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard')}}/vendors/css/vendors-rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard')}}/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard')}}/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard')}}/css-rtl/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/dashboard/css/style-rtl.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="semi-dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row col-md ">


                                <div class="col-lg-86 p-0">

                                    <div class="card rounded-0 mb-0 px-2">
                                        @include('dashboard.layouts.includes.alerts.success')
                                        @include('dashboard.layouts.includes.alerts..errors')
                                        <div class="card-header pb-1">

                                            <div class="card-title">
                                                <h4 class="mb-0">Login </h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Welcome please login</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form action="{{ route('admin.login') }}" method="POST">
                                                    @csrf
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input name="email" type="text" class="form-control" id="user-name" placeholder="email" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Email</label>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input name="password" type="password" class="form-control" id="user-password" placeholder="كلمة المرور" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                             </span>
                                                        @enderror
                                                    </fieldset>

                                                    <button type="submit" class="btn btn-primary float-right btn-inline">login</button>
                                                </form>
                                            </div>

                                        </div>

                                        <div class="login-footer">

                                        </div>

                                    </div>


                                </div>
                                <div class="col-lg-5  d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="{{asset('public/dashboard/images/pages/login.png')}}" alt="branding logo">
                                </div>


                            </div>


                        </div>

                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('public/dashboard/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('public/dashboard/js/core/app-menu.js')}}"></script>
    <script src="{{asset('public/dashboard/js/core/app.js')}}"></script>
    <script src="{{asset('public/dashboard/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
