<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::get('/about', function () {
    return view('about');
})->name("myabout");


Route::get("/post",function(){
    return view('post');
})->name("mypost");

// Route::get("/test/{id?}",function(string $id = null){
//     return "<h1>This is simple test route, Your id is $id </h1>";
// })->name("test");

