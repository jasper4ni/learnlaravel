<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn Laravel - {{ucfirst(Request::path())}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts.header')
    <div class="flex justify-center items-center flex-col font-mono background-img" 
    style="background-image: url('{{url('/assets/mojave_bg.jpg')}}');height:600px">
        <h1 class="text-white text-3xl text-center">{{ucfirst(Request::path())}}</h1>
        {{-- <a href="/blog" class="mt-5 px-5 py-2 bg-gray-500 bg-blend-overlay text-white outline-none hover:bg-gray-600">
            Read :)
        </a> --}}
    </div>
    @section('content')
    @show
    @include('layouts.footer')
</body>
</html>
<script src="{{ asset('js/app.js') }}"></script>
@stack('child-scripts')