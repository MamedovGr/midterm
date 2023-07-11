<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'K1',
            'K2',
            'K3',
            'K4',
            'K5',
            'K6',
            'K7',
            'K8',
            'K9',
            'K10',

        ];

        foreach ($courses as $course) {
            $obj = new CourseSeeder();
            $obj->name = $course;
            $obj->save();
        }
    }
}
