<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{
    public function addCity(Request $request){
        $city = DB::table('cities')
                ->insert([
                    'city_name' => $request->city_name
                ]);
        
        if($city){
            return redirect()->route('showAllCity');
        }        
    }

    public function showAllCity(){
        $cities = DB::table('cities')->get();
        return view('showCity',['data' => $cities]);
    }
}
