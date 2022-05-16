<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');

Route::get('/dashboard',[App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('admin');

/* Route for the categories */
Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->names('categories')->middleware('admin');

/* Route for the post */
Route::resource('posts', App\Http\Controllers\Admin\PostController::class)->names('posts');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
