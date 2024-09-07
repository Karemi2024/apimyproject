<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lists>
 */
class ListsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameL' => $this->faker->name(),
            'descriptionL' => $this->faker->sentence(),
            'colorL' => $this->faker->randomElement(['#FF0000', '#00FF00', '#0000FF']),
            'idBoard' => $this->faker->randomElement([1,5]),
            'logicdeleted' => 0,
        ];
    }
}
