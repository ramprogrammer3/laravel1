<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome')->name('users');
// })->name('home');

Route::resource('/users',UserController::class);

Route::redirect('/','/users');