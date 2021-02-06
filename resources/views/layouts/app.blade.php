<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - ICT Assets</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('plugins/fontawesome/js/all.min.js') }}"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ asset('css/portal.css') }}">
    
   
</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            @include('layouts.header')
            <!--//container-fluid-->
        </div>
        <!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href="index.html"><img class="logo-icon mr-2" src="assets/images/app-logo.svg"
                            alt="logo"><span class="logo-text">PORTAL</span></a>

                </div>
                @include('layouts.sidebar')
                </nav>
            </div>
            <!--//app-sidepanel-footer-->

        </div>
        <!--//sidepanel-inner-->
        </div>
        <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
           @yield ('content')
        </div>
        @include('layouts.footer')

    </div>

    <!-- Javascript -->
    <script src="{{ asset('plugins/popper.min.js') }}"></script>
    <script src="{{ asset ('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Charts JS -->
    <script src="{{ asset('plugins/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('js/index-charts.js') }}"></script>

    <!-- Page Specific JS -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>