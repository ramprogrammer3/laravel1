<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function add(Request $request){

        $studentData = DB::table('students')
                       ->insert([
                            'name' => $request->name,
                            'email' => $request->email,
                            'age' => $request->age,
                            'city' => $request->city
                       ]);
       if($studentData){
           return redirect()->route('home');              
       }                
    }


    public function showAllStudents(){
        $students = DB::table('students')
                    ->join('cities','students.id','=','cities.id')
                    ->get();
        // return $students;            
        return view('welcome',['data' => $students]);
    }
}
