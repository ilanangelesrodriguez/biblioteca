<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;

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

//Route::view('/','home');

/**
Route::get('/', [PageController::class,'home'])->name('home');

Route::get('blog', [PageController::class,'blog'])->name('blog');

Route::get('blog/{id}', [PageController::class,'post'])->name('post');
*/

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'home')->name('home');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');
});


Route::get('buscar', function (Request $request) {
    return $request->all();
});

