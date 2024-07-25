<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/users', function () {
//     return view('users',['user' => 'Ram Kumar']);
// });

// Route::get('/users', function () {
//     $name = "Ram Kumar";
    // return view('users',[
    //     'user' => $name,
    //     "city" =>"Delhi",
    //     "js" => "<script>alert('Hello') </script>"
    // ]);

    // return view('users')->with('user',$name)->with('city',"Noida");
    // return view('users')
    // ->withUser($name)
    // ->withCity("Noida");
// });


function getUsers(){
    return   $names = [
        1 => ['name' => "Ram Kumar", 'phone' => '12457896','city' =>'Noida'],
        2 => ['name' => "Palak", 'phone' => '54812231','city' =>'Pari chauk'],
        3 => ['name' => "Charu", 'phone' => '78451896','city' =>'Delhi'],
        4 => ['name' => "Nandani", 'phone' => '14785236','city' =>'Sector 62']
    ];
}


Route::get('/users', function () {
    $names = getUsers();
    return view('users',['user' => $names, 'city' => "Noida"]);
});


Route::get('/user/{id}', function ($id) {
    // return view('users',['user' => 'Ram Kumar']);
    $users = getUsers();

    abort_if(!isset($users[$id]),404);

    $user = $users[$id];
    return view('user',['id' => $user]); 
})->name('view.user');
