<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
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
            'user_id'   =>  User::all()->random()->id,
            'band'   =>  $this->faker->word(),
            'type_vendeur'   => $this->faker->randomElement(['particular','professional']),
            'city'   =>  $this->faker->city(),
            'model'   =>  $this->faker->word(),
            'origin'          => $this->faker->word(),
            'first_hand'   =>  $this->faker->word(),
            'fuel'   =>  $this->faker->randomElement(['all','diasel','electric','lgp','hybrid']),
            'kilometrage'   =>  $this->faker->word(),
            'condition_car'   =>  $this->faker->randomElement(['excellent','very Good','damaged','for pieces','correct']),
            'method'   =>  $this->faker->randomElement(['call','sms','email']),
            'daily'   =>  $this->faker->randomElement(['day','week','mounth']),
        ];
    }
}
