<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students = collect([
            ["name" => "sarita","email" => "sarita@gmail.com"],
            ["name" => "Neha", "email" => "neha@gmail.com"],
            ["name" => "mintu","email" => "mintu@gmail.com"]
        ]);


        $students->each(function($student){
            student::insert($student);
        });

    }
}
