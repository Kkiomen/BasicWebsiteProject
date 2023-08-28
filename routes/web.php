<?php

use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', \App\Livewire\Index::class)->name('index');
Route::get('/blog', \App\Livewire\Blog::class)->name('blog');
Route::get('/article-test', \App\Livewire\ArticleTest::class)->name('article-test');
Route::get('/test', [\App\Http\Controllers\TestController::class, 'test'])->name('test');
Route::get('/generate_article/{article}/now', [\App\Http\Controllers\GeneratorController::class, 'generateArticle'])->name('generateArticle');
Route::get('/generate_tasks/{article}/now', [\App\Http\Controllers\GeneratorController::class, 'generateTasks'])->name('generateTasks');

Route::get('/article/{category_slug}/{article_slug}', \App\Livewire\Article::class)->name('article');
Route::get('/category/{category_slug}', \App\Livewire\Category::class)->name('category');
Route::get('/dfsdfsdfs', \App\Livewire\Category::class);
