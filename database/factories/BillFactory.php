<?php

namespace Database\Factories;

use App\Models\Consult;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => $this->faker->randomFloat(2, 50, 500),
            'date' => $this->faker->date(),
            'consult_id' => Consult::factory(),
        ];
    }
}
