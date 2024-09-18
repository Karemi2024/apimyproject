<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Label>
 */
class LabelFactory extends Factory
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
            'colorL' => $this->faker->randomElement(['#FF0000', '#00FF00', '#0000FF']),
            'idWorkEnv'=> $this->faker->randomElement([1,2,3,4,5]),
            'logicdeleted' => 0
        ];
    }
}
