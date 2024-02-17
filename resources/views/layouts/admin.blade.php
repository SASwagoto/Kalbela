<!DOCTYPE html>
<html lang="en" data-sidebar-color="dark" data-topbar-color="light" data-sidebar-view="default">

<head>
    <meta charset="utf-8">
    <title>Dashboard | Lunoz - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="MyraStudio" name="author">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('backend')}}/assets/css/theme.min.css" rel="stylesheet" type="text/css">
    {{-- <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css"> --}}
    <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome6/css/all.min.css')}}">
    @stack('css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Head Js -->
    <script src="{{asset('backend')}}/assets/js/head.js"></script>
</head>
<body>
    
    <div class="app-wrapper">

        <!-- Sidenav Menu Start -->
        @include('layouts.partials.dashboard.sidebar')
        <!-- Sidenav Menu End  -->

        <!-- Start Page Content here -->
        <div class="app-content">

            <!-- Topbar Start -->
           @include('layouts.partials.dashboard.topbar')
            <!-- Topbar End -->

            <main class="py-2 px-6">
                @yield('content')
            </main>

            <!-- Footer Start -->
           @include('layouts.partials.dashboard.footer')
            <!-- Footer End -->

        </div>
        <!-- End Page content -->
    </div>

    @include('sweetalert::alert')
    <!-- Plugin Js -->
    <script src="{{asset('backend')}}/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{asset('backend')}}/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{asset('backend')}}/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{asset('backend')}}/assets/libs/@frostui/tailwindcss/frostui.js"></script>

    <!-- App Js -->
    <script src="{{asset('backend')}}/assets/js/app.js"></script>

    @stack('js')

</body>

</html>