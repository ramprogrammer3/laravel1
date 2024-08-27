<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $json = File::get(path: 'database/json/students.json');

        // $students = collect(json_decode($json));

        // $students = collect([
        //     ["name" => "sarita", "email" => "sarita@gmail.com"],
        //     ["name" => "Neha", "email" => "neha@gmail.com"],
        //     ["name" => "mintu", "email" => "mintu@gmail.com"]
        // ]);
        // $students->each(function ($student) {
        //     student::create([
        //         'name' => $student->name,
        //         'email' => $student->email,
        //     ]);
        // });

        for ($i = 1; $i <= 10; $i++) {
            student::create([
                'name' => fake()->name(),
                "email" => fake()->unique()->email(),
            ]);
        }
    }
}
