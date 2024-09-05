<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameC' => $this->faker->name(),
            'descriptionC' => $this->faker->sentence(),
            'end_date' => $this->faker->date('Y-m-d','now'),
            'approbed' => $this->faker->randomElement([0,1]),
            'important' => $this->faker->randomElement([0,1]),
            'done' => $this->faker->randomElement([0,1]),
            'idList' => $this->faker->randomElement([1,5])   

        ];
    }
}
