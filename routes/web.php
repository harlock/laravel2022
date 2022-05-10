<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ReactionTypeController;
use \App\Http\Controllers\PostTypeController;
use \App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("mi_primer_web",function(){
    return view("examples.hello_world");
});
Route::resource("tipos_reacciones",ReactionTypeController::class);
Route::resource("tipos_post",PostTypeController::class);
Route::resource("posts",PostController::class);


Route::get("test_template",function(){
    return view("layout.template");
});


Route::get("example1",function(){
    return view("examples.example1");
});

Route::get("example2",function(){
    return view("examples.example2");
});








Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
