<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CardUsers>
 */
class CardUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idCard' => $this->faker->randomElement([1,5]),
            'idJoinUserWork' => $this->faker->randomElement([1,5])
        ];
    }
}
