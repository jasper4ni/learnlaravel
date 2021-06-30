@extends('layouts.layout')

@section('content')
    <form class="shadow-md rounded-md bg-green-100 p-12 m-10" action="{{ route('article.update',$article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-2xl font-bold">
                修改文章
            </label>
            <label class="block text-xl mt-5 mb-2">
                標題
            </label>
            <input type="text" value="{{$article->title}}" name="title" class="shadow-md bg-white py-3 px-2 w-full outline-none rounded-sm ">

            <label class="block text-xl mt-7 mb-2">
                内容
            </label>
            <textarea name="content" id="" cols="30" rows="10" class="w-full h-48 shadow-md bg-white py-3 px-2 outline-none rounded-sm">
                {{$article->content}}
            </textarea>

            <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-8 rounded text-sm tracking-wider focus:outline-none focus:shadow-outline"">
                修改
            </button>
        </div>
    </form>
@endsection