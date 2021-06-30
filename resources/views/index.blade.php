@extends('layouts.layout')
@section('banner-title','Do you dessire to become a senior developer?')
@section('banner-btn')
<a href="/blog" class="mt-5 px-5 py-2 bg-gray-500 bg-blend-overlay text-white outline-none hover:bg-gray-600">
    Read :)
</a>
@endsection
@section('content')
    <section class="py-8 bg-gray-700 text-white font-mono">
        <h2 class="w-9/12 py-8 mx-auto text-3xl">Recent Article</h2>
        <div class="w-9/12 grid grid-cols-2 gap-5 mx-auto">
            @foreach ($articles as $key=>$article)
                <a href="{{ route('article.show',$article->id ) }}" 
                    class="h-52 border-2 relative bg-black bg-opacity-50 border-gray-500 rounded w-full mx-auto p-5 hover:bg-opacity-70">
                    <h2 class="font-bold mb-2">{{$article->title}}</h2>
                    <p>{{Str::limit($article->content, 150)}}</p>
                    <p class="absolute bottom-3 left-5">{{date('Y-m-d', strtotime($article->created_at))}}</p>
                    <span class="absolute bottom-3 right-5">-></span>
                </a>
            @endforeach
        </div>
        
        <div class="w-9/12 mx-auto text-xl h-14 flex items-center justify-end mt-5">
            <a href="/article">More Article -></a>
        </div>  
    </section>
    
@endsection