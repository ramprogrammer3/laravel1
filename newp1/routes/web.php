<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});


Route::get("/post",function(){
    return view('post');
});

Route::get("/test/{id?}",function(string $id = null){
    return "<h1>This is simple test route, Your id is $id </h1>";
});

