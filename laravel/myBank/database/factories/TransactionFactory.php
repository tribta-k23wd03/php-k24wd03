<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $account = Account::inRandomOrder()->first()
            ?? Account::factory()->create();

        $amount = $this->faker->randomFloat(4, 10, 2000);
        $type = $this->faker->randomElement(['deposit', 'withdraw']);

        $balanceAfter = $type === 'deposit'
            ? $account->balance + $amount
            : $account->balance - $amount;

        return [
            'type' => $type,
            'amount' => $amount,
            'balance_after' => $balanceAfter,
            'memo' => $this->faker->sentence(),
            'account_id' => $account->id,
            'created_by' => $account->user_id
        ];
    }
}
