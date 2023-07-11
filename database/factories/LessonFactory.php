<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'season_id' => $this->faker->unique()->numberBetween($min = 1, $max =4),
            'course_id' => $this->faker->unique()->numberBetween($min = 1, $max = 10),
            'classroom_id' => $this->faker->unique()->numberBetween($min = 1, $max = 10),
            'teacher_id' => $this->faker->unique()->numberBetween($min = 1, $max = 20),

        ];
    }
}
