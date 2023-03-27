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

Route::get('/about', [App\Http\Controllers\AboutController::class, 'pageAbout']);

Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('articles.index');;
Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class, 'show'])->name('articles.show');
