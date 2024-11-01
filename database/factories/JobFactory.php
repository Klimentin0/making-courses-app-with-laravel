<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject' => fake()->randomElement(['Математика', 'Русский', 'Английский']),
            'test_number' => fake()->numberBetween(1, 100),
            'mark_value' => fake()->numberBetween(1, 5),
            'time_limit' => fake()->randomElement(['1 день', '2 дня', '3 дня'])
        ];
    }
}
