<?php

namespace Database\Factories;

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
            // 'path'   => $this->faker->image('public/storage/image/car', 400, 300, null, false),
        ];
    }
}
