<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numerify('AC###'),
            'name' => $this->faker->word() . ' Account',
            'currency' => $this->faker->randomElement(['VND', 'USD', 'EUR']),
            'balance' => $this->faker->randomFloat(4, 100, 10_000),
            'user_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
