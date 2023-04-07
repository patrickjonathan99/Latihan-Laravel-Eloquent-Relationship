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
            //
            'accountnumber' => fake()->creditCardNumber(),
            'balance' => fake()->numberBetween(100000, 1000000),
            'bank_type_id' => mt_rand(1,3)
        ];
    }
}
