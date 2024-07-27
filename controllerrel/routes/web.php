<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;

// Route::get('/', function () {
//     return view('welcome');
// });


// group of page controller here below 

Route::controller(PageController::class)->group(function () {
    Route::get('/',  'showHome')->name('home');
    Route::get('/user/{id?}',  'showUser')->name("user");
    Route::get('/blog','showBlog')->name('blog');
});

Route::get("/test",TestController::class);

// Route::get('/', [PageController::class, 'showHome'])->name('home');
// Route::get('/user/{id?}', [PageController::class, 'showUser'])->name("user");
// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');
