<?php

use App\Http\Controllers\ApiArticleController;
use App\Http\Controllers\ArticleController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/articles', [ApiArticleController::class, 'articles'])->name('api.article');
Route::get('/articles/{id}', [ApiArticleController::class, 'detail']);