<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Routing\Router;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WriterController;
use App\Models\Article;

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

Route::get('/', [ArticleController::class, "index"])->name('home');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name("articles.show");
Route::get('/writers', [WriterController::class, 'index'] )->name('writers');
Route::get('/writers/{id}', [WriterController::class, 'show'])->name('writers.articles');
Route::get('/category/{category}', [ArticleController::class, "category"])->name('articles.category');
Route::get('/about', function(){
    return view("pages.about");
})->name("about");