<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'welcome'])->name('homepage');

Route::get('/profilo/{id}',[PageController::class,'profile'] )->name('profile');

Route::get('/form',[PageController::class, 'form'])->name('form');
Route::post('/send',[PageController::class, 'send'])->name('send');
Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);

