<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class grouptaskscoordinatorleadersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'idJoinUserWork' => $this->faker->randomElement([1,2,3,4,5]),
            'startdate' => $this->faker->date('Y-m-d','now'),
            'enddate' => $this->faker->date('Y-m-d','now'),
            'logicdeleted' => 0,
            'name' => $this->faker->name()
        ];
    }
}
