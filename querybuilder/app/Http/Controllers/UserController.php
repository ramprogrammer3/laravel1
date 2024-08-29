<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
        // return $users;
        return view('welcome',['data' => $users]);
    }

    public function singleUser(string $id){
        $user = DB::table('users')->where('id', $id)->get();
        return view('user',['data' => $user]);
    }

    public function addUser(){
        $user = DB::table('users')
                    ->insert([
                        'name' => "Ranjana kumari",
                        "email" => "ranjana2342@gmail.com",
                        "age" => 16,
                        "city" => "Greater Noida",
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);

        if($user){
            echo "<h1> Data added successfully .  </h1>";
        }            
    }

    public function updateUser(){
        $user = DB::table('users')
                    ->where('id',6)
                    ->update([
                        'name' => "Charuuu",
                        "email" => "charu12@gmail.com"
                    ]);

        return $user;           
    }
}
