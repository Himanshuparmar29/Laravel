<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'name' => 'Himanshu',
                'age' => 29
            ],
            [
                'name' => 'Harsh',
                'age' => 19
            ],
            [
                'name' => 'Huzaifa',
                'age' => 18
            ],
            [
                'name' => 'Harshita',
                'age' => 10
            ],
            [
                'name' => 'Hemali',
                'age' => 25
            ]
        ];

        foreach($students as $student)
        {
            student::insert($student);
        }
    }
}
