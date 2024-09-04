<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/addStudent','student');

Route::post('/add',[StudentController::class,'add'])->name('add');
Route::get("/",[StudentController::class,'showAllStudents'])->name('home');

Route::view('/city','city');
Route::post('/addCity',[CityController::class,'addCity'])->name('addCity');
Route::get('/showAllCity',[CityController::class,'showAllCity'])->name('showAllCity');