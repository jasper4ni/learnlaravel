<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @php
        $title = Request::path();
        if ($title == '/') {
            $title = 'Home';
        }
    @endphp
    <title>Learn Laravel - {{ucfirst($title)}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.header')
    <div class="flex justify-center items-center flex-col font-mono background-img" 
    style="background-image: url('{{url('/assets/mojave_bg.jpg')}}');height:600px">
    <h1 class="text-white text-3xl text-center">@yield('banner-title')</h1>
        @section('banner-btn')
        @show
    </div>
    @section('content')   
    @show
    @include('layouts.footer')
</body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
@stack('child-scripts')