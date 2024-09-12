<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JoinWorkEnvUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idWorkEnv = $this->faker->randomElement([1,2, 3, 4, 5]);
        $idUser = $this->faker->randomElement([1,2,3,4,5]);

        // Asegurarse de que idWorkEnv e idUser no sean iguales
        while ($idWorkEnv == $idUser) {
            $idUser = $this->faker->randomElement([1, 5]);
        }

        return [
            'approbed' => $this->faker->randomElement([0, 1]),
            'idWorkEnv' => $idWorkEnv,
            'idUser' => $idUser,
            'privilege' => $this->faker->randomElement([0, 1, 2]),
            'logicdeleted' => 0
        ];
    }
}
