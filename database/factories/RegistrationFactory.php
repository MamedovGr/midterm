<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'lesson_id' => $this->faker->unique()->numberBetween($min = 1, $max = 100),
            'student_id' => $this->faker->unique(),
            'price' => rand(1250, 1950),
        ];
    }
}
