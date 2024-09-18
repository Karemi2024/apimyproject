<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\activitycoordinatorleader>
 */
class activitycoordinatorleaderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nameT'=> $this->faker->name(),
            'descriptionT'=> $this->faker->sentence(),
            'end_date'=> $this->faker->date('Y-m-d','now'),
            'logicdeleted'=> 0,
            'important'=> $this->faker->randomElement([0,1]),
            'done' => $this->faker->randomElement([0,1]),
            'idgrouptaskcl'=> $this->faker->randomElement([1,2,3,4,5]),
            'idLabel' => $this->faker->randomElement([1,5])

        ];
    }
}
