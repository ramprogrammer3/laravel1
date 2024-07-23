<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('pages')->group(function () {

    Route::get('/blog', function () {
        return view('pages.blog');
    })->name('blog');

    Route::get('/post', function () {
        return view('pages.post');
    })->name('post');

    Route::get('/product', function () {
        return view('pages.product');
    })->name('product');
});

Route::fallback(function () {
    return '<h1>page not found here </h1>';
});
