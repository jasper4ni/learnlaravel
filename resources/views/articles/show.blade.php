@extends('layouts.layout')

@section('banner-title',ucfirst(Request::path()))

@section('banner-btn')
<h2 class="text-white text-3xl mt-3 text-center">{{$article->title}}</h2>

@endsection
@section('content')
    <div class="bg-gray-700 text-white font-mono pb-12 pt-10" style="min-height: 400px">
        <div class="w-9/12 m-auto flex flex-col">
            <h2 class="font-bold mb-2 text-3xl">{{$article->title}}</h2>
            <p class="text-lg mt-3">
                {{$article->content}}
            </p>
        </div>
    </div>
@endsection