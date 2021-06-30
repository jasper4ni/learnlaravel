<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index']);
// Route::get('routes', function () {
//     $routeCollection = Route::getRoutes();

//     echo "<table style='width:100%'>";
//     echo "<tr>";
//     echo "<td width='10%'><h4>HTTP Method</h4></td>";
//     echo "<td width='10%'><h4>Route</h4></td>";
//     echo "<td width='10%'><h4>Name</h4></td>";
//     echo "<td width='70%'><h4>Corresponding Action</h4></td>";
//     echo "</tr>";
//     foreach ($routeCollection as $value) {
//         echo "<tr>";
//         echo "<td>" . $value->methods()[0] . "</td>";
//         echo "<td>" . $value->uri() . "</td>";
//         echo "<td>" . $value->getName() . "</td>";
//         echo "<td>" . $value->getActionName() . "</td>";
//         echo "</tr>";
//     }
//     echo "</table>";
// });
// Route::get('/', function () {
//     return view('home',[
//         'title' => 'home',
//         'link' => '/',
//         'link_list' => ['home','people','views','tech']
//     ]);
// });

// Route::get('/hello', function () {
//     return view('child',['array' => ['Samantha1','Samantha2','Samantha3','Samantha4']]);
// });
// Route::get('/layout', function () {
//     return view('layouts.layout');
// });

// Route::get('articles', 'App\Http\Controllers\ArticleController@index');
// Route::get('/articles', [ArticleController::class, 'index']);
// Route::resource('articles', 'App\Http\Controllers\ArticleController');
Route::resource('article', ArticleController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
