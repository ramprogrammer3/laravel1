<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('welcome',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required|string'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' => $request->city
        ]);

        if($user){
            return redirect()->route('users.index');
        }

        return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // $user = User::where('id', $user->id)->get();
        $user = User::find($user->id);
        return view('view',compact('user'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'city' => 'required|string'
        ]);

        $user = User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' => $request->city
        ]);

        if($user){
            return redirect()->route('users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
