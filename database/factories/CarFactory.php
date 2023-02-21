<?php

namespace Database\Factories;

use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
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
            'brand'            => $this->faker->word(),
            'model'            => $this->faker->word(),
            'date_car'         => $this->faker->dateTimeBetween('1970-01-01','2020-12-12'),
            'city'             => $this->faker->city(),
            'description'      => $this->faker->paragraph(),
            'gearbox'          => $this->faker->randomElement(['all','automatique','manual']),
            'gray_card_holder' => $this->faker->word(),
            'gray_card_number' => $this->faker->word(),
            'mileage'         =>  $this->faker->word(),
            'origin'          => $this->faker->word(),
            'date_cleared'    => $this->faker->dateTimeBetween('1970-01-01','2020-12-12'),
            'first_hand'      => $this->faker->word(),
            'fuel'            => $this->faker->randomElement(['all','diasel','electric','lgp','hybrid']),
            'country_id'      => Country::all()->random()->id,
            'condition_car'   => $this->faker->randomElement(['excellent','very Good','damaged','for pieces','correct']),
            'number_view'     => $this->faker->numberBetween(5,30),
            'number_click'    => $this->faker->numberBetween(5,40),
            'price'           => $this->faker->numberBetween(199,399),
            'user_id'         => User::all()->random()->id,
            'visibility'      => $this->faker->boolean(),
        ];
    }
}

