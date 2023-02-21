<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
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
            'car_id'    => Car::all()->random()->id,
            'user_id'   => User::all()->random()->id,
            // 'amount'    => $this->faker->numberBetween(99,399),
        ];
    }
}
