<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/article/{category_slug}/{article_slug}', \App\Livewire\Article::class)->name('article');
Route::get('/category/{category_slug}', \App\Livewire\Category::class)->name('category');
Route::get('/dfsdfsdfs', \App\Livewire\Category::class);
