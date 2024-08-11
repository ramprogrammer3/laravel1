<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $name = "ram kumar maniyari";
    return view('users',['user' => $name, "city" => "Sitamarhi"]);
});
