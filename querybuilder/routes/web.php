<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [UserController::class, 'showUsers'])->name('home');
Route::get('/user/{id}', [UserController::class, 'singleUser'])->name('view.user');

Route::post('/add', [UserController::class, 'addUser'])->name('add');

Route::post('/update/{id}', [UserController::class, 'updateUser'])->name('update.user');

Route::get('/updatepage/{id}', [UserController::class, 'updatePage'])->name('update.page');

Route::get("/delete/{id}", [UserController::class, 'deleteUser'])->name('view.delete');

Route::get("/deleteAllUser", [UserController::class, 'deleteAllUser'])->name('view.deleteAllUser');

Route::view("/newuser", 'adduser');
