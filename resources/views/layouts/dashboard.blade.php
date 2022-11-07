
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name') }} - Dashboard</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendor/bootstrap.min.css') }}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendor/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendor/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/css/vendor/cryptocurrency-icons.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/plugins/plugins.css') }}">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/helper.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">

    <!-- Custom Style CSS Only For Demo Purpose -->
    <link id="cus-style" rel="stylesheet" href="{{ asset('dashboard/css/style-primary.css') }}">
    
    <script src="{{ asset('dashboard/js/vendor/jquery-3.3.1.min.js') }}"></script>

</head>

<body class="skin-dark">

    <div class="main-wrapper">


        <!-- Header Section Start -->
        <div class="header-section">
            <div class="container-fluid">
                <div class="row justify-content-between align-items-center">

                    <!-- Header Logo (Header Left) Start -->
                    <div class="header-logo col-auto">
                        <a href="{{ route(auth()->user()->role.'.index') }}">
                            <img src="{{ asset('nwanze-gerald.png') }}" width="50" alt="">
                            <img src="{{ asset('nwanze-gerald.png') }}" class="logo-light" width="50" alt="">
                        </a>
                    </div><!-- Header Logo (Header Left) End -->

                    <!-- Header Right Start -->
                    <div class="header-right flex-grow-1 col-auto">
                        <div class="row justify-content-between align-items-center">

                            <!-- Side Header Toggle & Search Start -->
                            <div class="col-auto">
                                <div class="row align-items-center">

                                    <!--Side Header Toggle-->
                                    <div class="col-auto"><button class="side-header-toggle"><i class="zmdi zmdi-menu"></i></button></div>

                        

                                </div>
                            </div><!-- Side Header Toggle & Search End -->

                            <!-- Header Notifications Area Start -->
                            <div class="col-auto">

                                <ul class="header-notification-area">


                                    <!--User-->
                                    <li class="adomx-dropdown col-auto">
                                        <a class="toggle" href="#">
                                            <span class="user">
                                            <span class="avatar">
                                                    <span class="fa fa-user-o"></span>
                                            <span class="status"></span>
                                            </span>
                                            <span class="name">{{ auth()->user()->name }}</span>
                                            </span>
                                        </a>

                                        <!-- Dropdown -->
                                        <div class="adomx-dropdown-menu dropdown-menu-user">
                                            <div class="head">
                                                <h5 class="name"><a href="#">{{ auth()->user()->name }}</a></h5>
                                                <a class="mail" href="#">{{ auth()->user()->email }}</a>
                                            </div>
                                            <div class="body">
                                                
                                                <ul>
                                                    <li><a href="#"><i class="zmdi zmdi-account"></i>Profile</a></li>
                                                </ul>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-gear"></i>Settings</a></li>
                                                </ul>
                                                
                                                <ul>
                                                    <li><a href="#" onclick="$('#logout').submit()"><i class="fa fa-sign-out"></i> Logout</a></li>
                                                    <form action="{{ route('auth.logout') }}" method="post" id="logout">
                                                    @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>

                                    </li>

                                </ul>

                            </div><!-- Header Notifications Area End -->

                        </div>
                    </div><!-- Header Right End -->

                </div>
            </div>
        </div><!-- Header Section End -->
        <!-- Side Header Start -->
        <div class="side-header show">
            <button class="side-header-close"><i class="zmdi zmdi-close"></i></button>
            <!-- Side Header Inner Start -->
            <div class="side-header-inner custom-scroll">

                <nav class="side-header-menu" id="side-header-menu">
                    <ul>
                        <li>
                            <a href="{{ route(auth()->user()->role.'.index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#"><i class="fa fa-cogs"></i> <span>Settings</span></a>
                            <ul class="side-header-sub-menu">
                                <li class="has-sub-menu">
                                    <a href="#"><i class="fa fa-cogs"></i> <span>Pages</span></a>
                                    <ul class="side-header-sub-menu">
                                        <li class="has-sub-menu">
                                            <a href="#"><i class="fa fa-home"></i> <span>Home</span></a>

                                            <ul class="side-header-sub-menu">
                                                <li>
                                                    <a href="{{ route('admin.settings.page.home.hero') }}"><i class="fa fa-home"></i> <span>Hero</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-info"></i> <span>Features</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-folder"></i> <span>Portfolio</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-file-pdf-o"></i> <span>Resume</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-book"></i> <span>Blog</span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-address-book"></i> <span>Contact</span></a>
                                                </li>
                                                <li><a href="{{ route('admin.settings.page.home.preview') }}"><i class="fa fa-television"></i> <span>Preview</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#"><i class="fa fa-book"></i> <span>Blog</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.staffs.index') }}"><i class="fa fa-users"></i> <span>Staffs</span></a>
                        </li>
                        <li>
                            <a href="{{ route('admin.admins.index') }}"><i class="fa fa-users"></i> <span>Admins</span></a>
                        </li>
                    </ul>
                </nav>

            </div><!-- Side Header Inner End -->
        </div><!-- Side Header End -->

        <!-- Content Body Start -->
        <div class="content-body">

            <!-- Page Headings Start -->
            <div class="row justify-content-between align-items-center mb-10">

                <!-- Page Heading Start -->
                <div class="col-12 col-lg-auto mb-20">
                    <div class="page-heading">
                        <h3>{{ ucfirst(auth()->user()->role) }} Dashboard<span></span></h3>
                    </div>
                </div><!-- Page Heading End -->

            </div><!-- Page Headings End -->
            <hr>
            <x-alert />

            @yield('content')

        </div><!-- Content Body End -->

        <!-- Footer Section Start -->
        <div class="footer-section">
            <div class="container-fluid">

                <div class="footer-copyright text-center">
                    <p class="text-body-light"> {{ date('Y') }} &copy; <a href="#">{{ config('app.name') }}</a></p>
                </div>

            </div>
        </div><!-- Footer Section End -->

    </div>

    <!-- JS
============================================ -->
    <script src="{{ asset('dashboard/js/vendor/jquery-3.3.1.min.js') }}"></script>

    <!-- Global Vendor, plugins & Activation JS -->
    <script src="{{ asset('dashboard/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/vendor/bootstrap.min.js') }}"></script>
    <!--Plugins JS-->
    <script src="{{ asset('dashboard/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/tippy4.min.js') }}.js') }}"></script>
    <!--Main JS-->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="{{ asset('dashboard/js/plugins/moment/moment.min.js') }}"></script>

    <!--Daterange Picker-->
    <script src="{{ asset('dashboard/js/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/daterangepicker/daterangepicker.active.js') }}"></script>

    <!--Echarts-->
    <script src="{{ asset('dashboard/js/plugins/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/chartjs/chartjs.active.js') }}"></script>

    <!--VMap-->
    <script src="{{ asset('dashboard/js/plugins/vmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/vmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('dashboard/js/plugins/vmap/vmap.active.js') }}"></script>


</body>


</html>