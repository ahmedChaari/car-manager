<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $path =  $this->faker->imageUrl($width = 200, $height = 200);
        return [
            'id'           => $this->faker->uuid,
            'path'         => $path,
            'name'         => basename($path),
            'car_id'       => Car::all()->random()->id,
            // 'path'   => $this->faker->image('public/storage/image/car', 400, 300, null, false),
        ];
    }
}
