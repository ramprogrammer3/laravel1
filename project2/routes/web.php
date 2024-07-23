<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/post/first', function () {
    return view('first');
});

Route::get('/text', function () {
    return view('about');
});

// Route::veiw("/text","about");