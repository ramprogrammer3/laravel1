<?php

use Illuminate\Support\Facades\Route;

function getUser()
{
    return  [
        1 => ["name" => "Amitabh", 'phone' => '9725364175', 'city' => 'Goa'],
        2 => ["name" => "Salman", 'phone' => '9754213698', 'city' => 'Delhi'],
        3 => ["name" => "Sunny", 'phone' => '9702487563', 'city' => 'Mubmai'],
        4 => ["name" => "Akshay", 'phone' => '9714752368', 'city' => 'Noida'],
    ];
}

Route::get('/', function () {
    return view('welcome');
});



Route::get('/users', function () {
    $name = "ram kumar maniyari";
    $names = getUser();
    return view('users', ['user' => $names, "city" => "Sitamarhi"]);

    // return view('users')->with("user",$name)->with('city', "Noida");
    // return view('users')
    //         ->withUser($name)
    //         ->withCity("Noida");
});

Route::get('/user/{id}', function ($id) {
    $users = getUser();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];

    return view('user', ["id" => $user]);
})->name('view.user');
