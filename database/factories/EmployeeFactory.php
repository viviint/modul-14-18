<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'email' => fake()->email(),
            'age' => fake()->numberBetween(25, 50),
            'position_id' => Position::factory()
            // 'firstname' => $this->faker->firstName,
            // 'lastname' => $this->faker->lastName,
            // 'email' => $this->faker->unique()->safeEmail,
            // 'age' => $this->faker->numberBetween(18, 65),
            // 'position_id' => \App\Models\Position::factory(),
        ];
    }
}
