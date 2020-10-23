<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    return view('about', [
        'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
});
Route::get('/articles',[\App\Http\Controllers\ArticlesController::class, 'index'])->name('articles.index');
Route::post('/articles', [\App\Http\Controllers\ArticlesController::class, 'store']);
Route::get('/articles/create', [App\Http\Controllers\ArticlesController::class, 'create']);
Route::get('/articles/{article}',[\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.show');
Route::get('/articles/{article}/edit',[\App\Http\Controllers\ArticlesController::class, 'edit']);
Route::put('/articles/{article}',[\App\Http\Controllers\ArticlesController::class, 'update']);



