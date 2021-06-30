@extends('layouts.layout')
@section('banner-title',ucfirst(Request::path()))
@section('content')
    <div class="bg-gray-700 text-white font-mono">
        <div class="w-9/12 m-auto py-8 flex flex-col">
            @foreach($articles as $article)
            {{-- <article class="w-full mb-5 h-48 border-2 relative bg-black bg-opacity-50 border-gray-500 rounded mx-auto p-5 hover:bg-opacity-70"> --}}
                <a class="w-full mb-5 h-48 border-2 relative bg-black bg-opacity-50 border-gray-500 rounded mx-auto p-5 hover:bg-opacity-70" href="{{ route('article.show',$article->id ) }}" 
                    class="">
                    <h2 class="font-bold mb-2">{{$article->title}}</h2>
                    <p>{{Str::limit($article->content, 400)}}</p>
                    <p class="absolute bottom-3 left-5">{{date('Y-m-d', strtotime($article->created_at))}}</p>
                    <span class="absolute bottom-3 right-5">-></span>
                </a>
            {{-- </article>             --}}
            @endforeach
        </div>
    </div>
    <a href="{{ route('article.create') }}">新增文章</a>
    <table class="table border border-black">
        <td class="border border-black">標題</td>
        <td class="border border-black">內容</td>
        <td class="border border-black">動作</td>
        @foreach($articles as $article)
        <tr class="border border-black">
            <td class="border border-black">{{ $article->title }}</td>
            <td class="border border-black">{{ $article->content }}</td>
            <td class="border border-black">
                <a href="{{ route('article.show',$article->id ) }}">查看</a>
                <a href="{{ route('article.edit',$article->id ) }}">編輯</a>
                <form action="{{ route('article.destroy', $article->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">
                        删除
                    </button>
                </form>
                {{-- <a href="{{ route('article.destroy',$article->id ) }}">刪除</a> --}}
            </td>
        </tr>
        @endforeach
    </table>
@endsection