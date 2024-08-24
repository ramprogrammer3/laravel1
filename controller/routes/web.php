<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PageController::class, 'showHome'])->name('home');
Route::get("/blog", [PageController::class, 'showBlog'])->name('blog');
// Route::get("/user", [PageController::class, 'showUser'])->name('user');
Route::get("/user/{id}", [PageController::class, 'showUser'])->name('user');
