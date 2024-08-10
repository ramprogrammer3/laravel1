<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");




// Route::get("/pages/about",function(){
//     return view("pages.about");
// })->name("about");

// Route::get("/pages/contact",function(){
//     return view("pages.contact");
// })->name("contact");

// Route::get("/pages/product",function(){
//     return view("pages.product");
// })->name("product");


Route::prefix('pages')->group(function () {
    Route::get("/about", function () {
        return view("pages.about");
    })->name("about");

    Route::get("/contact", function () {
        return view("pages.contact");
    })->name("contact");

    Route::get("/product", function () {
        return view("pages.product");
    })->name("product");
});
