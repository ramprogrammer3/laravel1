<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers()
    {
        // $users = DB::table('users')->get();
        $users = DB::table('users')
                // ->where('city', 'noida')    
                // ->orderBy('name')    
                ->paginate(3)
                ->appends(['sort' => 'votes'])
                ->fragment('ram');
        // return $users;        
        return view('welcome', ['data' => $users]);
    }

    public function singleUser(string $id)
    {
        $user = DB::table('users')->where('id',$id)->get();
        return view('user', ['data' => $user]);
    }

    public function addUser(Request $request)
    {
        $user = DB::table('users')
            ->insert([
                'name' => $request->name,
                "email" => $request->email,
                "age" => $request->age,
                "city" => $request->city,
                'created_at' => now(),
                'updated_at' => now()
            ]);

        if ($user) {
            return redirect()->route('home');
        }
    }

    public function updatePage(string $id)
    {
        $user = DB::table('users')->find($id);
        return view('updateuser', ['data' => $user]);
    }

    public function updateUser(Request $request, string $id)
    {
        $user = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                "email" => $request->email,
                'age' => $request->age,
                'city' => $request->city
            ]);

        if ($user) {
            return redirect()->route('home');
        }
    }

    public function deleteUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->delete();

        if ($user) {
            return redirect()->route('home');
        } else {
            echo "<h1>User not found.</h1>";
        }
    }

    public function deleteAllUser()
    {
        $user = DB::table('users')->truncate();

        if ($user) {
            echo "<h1>All User deleted successfully.</h1>";
        }
    }
}
