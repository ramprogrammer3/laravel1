<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [PageController::class, 'showHome'])->name('home');
// Route::get("/blog", [PageController::class, 'showBlog'])->name('blog');
// // Route::get("/user", [PageController::class, 'showUser'])->name('user');
// Route::get("/user/{id}", [PageController::class, 'showUser'])->name('user');

Route::controller(PageController::class)->group(function(){
    Route::get("/user","showUser")->name("user");
    Route::get("/blog","showBlog")->name("blog");
    Route::get("/product",'showProduct')->name("product");
});

Route::get("/test",TestController::class);
