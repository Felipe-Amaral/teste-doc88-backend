<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->tollFreePhoneNumber(),
            'bornDate' => fake()->dateTimeBetween($startDate = '-'.rand(18, 85).' years', $endDate = 'now', $timezone = null),
            'adress' => fake()->streetName(),
            'adressComplement' => fake()->buildingNumber(),
            'district' => fake()->city(),
            'cep' => fake()->postcode(),
            'createdAt' => now(),
        ];
    }
}
