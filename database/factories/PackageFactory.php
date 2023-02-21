<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'                => $this->faker->uuid,
            'name'      => $this->faker->name(),
            'amount'    => $this->faker->numberBetween(99,399),
        ];
    }
}
