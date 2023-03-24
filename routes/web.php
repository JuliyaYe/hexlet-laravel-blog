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

Route::get('/articles', function () {
    $articles = App\Models\Article::all();
    return view('articles', ['articles' => $articles]);
});