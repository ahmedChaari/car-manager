<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
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
            'name'  => $this->faker->country(),
            'active'    => $this->faker->boolean(),
        ];
    }
}
