<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Image;
use Illuminate\Database\Seeder;

class CarImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbrImages = Image::all()->count();

        Car::all()->each(function ($car) use($nbrImages){
            $take = random_int(1, $nbrImages);
            $images_ids = Image::inRandomOrder()->take($take)->get()->pluck('id');
            $car->users()->sync($images_ids);
        });
    }
}
