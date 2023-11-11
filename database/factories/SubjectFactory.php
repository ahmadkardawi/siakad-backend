<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       
        return [
            'title' => $this->faker->word,
            'lecturer_id' => \App\Models\User::factory(),
            'semester' => $this->faker->randomDigit(1),
            'academic_year' => '2022/2023',
            'sks' => $this->faker->randomDigit(1),
            'code' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'description' => $this->faker->paragraph(3),
        ];
    }
}