<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>কালবেলা । বিডি নিউজ । বাংলা নিউজ</title>
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/plugins/fontawesome6/css/all.min.css')}}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-white h-screen">
    @include('layouts.partials.header')
    @include('layouts.partials.navbar')
    @yield('content')
</body>
</html>