<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ClassroomSeeder::class,
            CourseSeeder::class,
            SeasonSeeder::class,
        ]);
        \App\Models\Student::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Teacher::factory(20)->create();
        \App\Models\Lesson::factory(1)->create();
        \App\Models\Registration::factory(2)->create();
    }
}
