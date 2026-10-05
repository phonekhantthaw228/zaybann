<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pay'      => fake()->randomElement(['credit_card', 'paypal', 'wave_money', 'kbz_pay']),
            'logo'     => fake()->imageUrl(),
            'acc_no'   => fake()->bankAccountNumber(),
            'acc_name' => fake()->name(),
        ];
    }
}
