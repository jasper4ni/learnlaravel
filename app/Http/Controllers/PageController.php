<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Article;

class PageController extends Controller
{
//     public function __construct()
//     {
//         // 排除某些方法
// //        return $this->middleware(['get_current_time'])->except('index');
//         return $this->middleware(['HeaderNav']);
//     }
    public function index(Request $request)
    {
        // $routeName = Route::current()->uri;
        // if($routeName=='/'){
        //     $routeName = 'Home';
        // }

        $headerNav = $request->get('headerNav');//中间件产生的参数

        // $articles = DB::table('articles')->limit(6)->get();
        // return view('home',['routeName'=>$routeName,'headerNav'=>$headerNav])->with('articles',$articles);
        // return view('index')
        // ->withArticles(DB::table('articles')
        //     ->limit(6)
        //     ->select('*')
        //     ->orderBy('id','desc')
        //     ->get()
        // );
        return view('index')->withArticles(Article::
        limit(6)
        ->latest()        
        ->orderBy('id','desc')
        ->get());

    }

}
