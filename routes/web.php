<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    [Postcontroller::class, 'index']
)->name('index');

Route::resource('posts',PostController::class);
Route::resource('comments',CommentController::class);
Auth::routes(['verify' => true]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
