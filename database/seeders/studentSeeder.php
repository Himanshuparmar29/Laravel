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
                'name' => 'Avadh',
                'age' => 20
            ],
            [
                'name' => 'Aaryan',
                'age' => 15
            ],
            [
                'name' => 'Arti',
                'age' => 22
            ]
        ];
        foreach($students as $student){
            student::insert($student);
        }
    }
}
