<?php

namespace Database\Factories;

use App\Models\PayementMethod;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'         => $this->faker->uuid,
            'code'       => $this->faker->bothify('?###??##'),
            'user_id'    => User::all()->random()->id,
            'somme'      => $this->faker->numberBetween(99,399),
            'somme_passe'=> $this->faker->numberBetween(99,399),
            'status'     => $this->faker->boolean(),
            'payement_method_id'=> PayementMethod::all()->random()->id,
        ];
    }
}
