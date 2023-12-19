<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);

        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->randomFloat(2, 1, 10000),
            'status' => $status,
            'billing_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status === 'P' ? $this->faker->dateTimeThisDecade() : null,
        ];
    }
}
