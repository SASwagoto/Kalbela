<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>কালবেলা । বিডি নিউজ । বাংলা নিউজ</title>
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome6/css/all.min.css')}}">
    @stack('css')
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-white h-screen font-bangla">
    @include('layouts.partials.header')
    @include('layouts.partials.navbar')
    @yield('content')

    <script src="{{asset('frontend/js/jquery-3.7.1.min.js')}}"></script>
    @stack('js')
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>