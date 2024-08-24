<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showUser()
    {
        // return "<h1>Welcome to controller tutorial</h1>";
        return view("pages.user");
    }

    public function showHome(){
        return view("welcome");
    }

    public function showBlog(){
        return view("pages.blog");
    }

    public function showProduct(){
        return view('pages.product');
    }
}
