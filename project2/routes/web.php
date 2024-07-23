<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pages/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/pages/post', function () {
    return view('pages.post');
})->name('post');

Route::get('/pages/product', function () {
    return view('pages.product');
})->name('product');





