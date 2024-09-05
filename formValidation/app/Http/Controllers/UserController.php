<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addUser(UserRequest $request)
    {
        // $request->validate(
        //     [
        //         'name' => 'required|string',
        //         'email' => 'required|email',
        //         'password' => 'required|alpha_num|min:6',
        //         'age' => 'required|numeric|min:20',
        //         'city' => 'required'
        //     ],
        //     [
        //         'name.require' => "Please Enter the name",
        //         'email.require' => 'Please Enter email address',
        //         'eamil.email' => 'Please Enter valid email address',
                
        //         'age.require' => "please enter age",
        //         'city.require' => "please enter city name"
        //     ]
        // );
        return $request->all();
    }
}
