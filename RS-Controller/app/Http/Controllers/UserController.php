<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "All user data";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "Add new data";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "Store user data";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "show user datails  of :$id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo "Edit page of $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
