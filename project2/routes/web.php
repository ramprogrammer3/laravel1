<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id?}/comment/{commentid?}', function (string $id=null,string $commentid = null) {
    if($id){
        return "<h1>This is post page id $id </h1> <h2> And comment id is $commentid </h2>";
    }else{
        return "<h2>There is no id found in route </h2>";
    }
});

// Route::get('/post/{id?}', function (string $id=null) {
//     if($id){
//         return "<h1>This is post page id $id </h1>";
//     }else{
//         return "<h2>There is no id found in route </h2>";
//     }
// });

// Route::get('/post/{id}', function (string $id) {
//     return "<h1>This is post page id $id </h1>";
// });

