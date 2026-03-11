<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'duration_hours' => $this->faker->numberBetween(10, 60),
            'level' => $this->faker->randomElement(['Beginner','Intermediate','Advanced']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
