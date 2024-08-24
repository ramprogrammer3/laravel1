<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showUser(string $id)
    {
        // return "<h1>Welcome to controller tutorial</h1>";
        return view("user",compact('id'));
    }

    public function showHome(){
        return view("welcome");
    }

    public function showBlog(){
        return view("blog");
    }
}
