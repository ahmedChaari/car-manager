<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarInfoFactory extends Factory
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
            'car_id'           => Car::all()->random()->id,
            'dvice'     => $this->faker->boolean(),
            'gps'       => $this->faker->boolean(),
            'volant_sport'  => $this->faker->boolean(),
            'alarm'  => $this->faker->boolean(),
            'electric_glass'  => $this->faker->boolean(),
                'rain_sensor'  => $this->faker->boolean(),
            'aide_parking'  => $this->faker->boolean(),
            'esp'  => $this->faker->boolean(),
            'power_steering'  => $this->faker->boolean(),
            'abs'  => $this->faker->boolean(),
            'xenon_headlights'  => $this->faker->boolean(),
            'board_computer'  => $this->faker->boolean(),
            'maintenance_book'  => $this->faker->boolean(),
            'panoramic_sunroof'  => $this->faker->boolean(),
            'cruise_control'  => $this->faker->boolean(),
            'anti_slip'  => $this->faker->boolean(),
            'leather_interior'  => $this->faker->boolean(),
            'head_up_display' => $this->faker->boolean(),
            'electric_hood'=> $this->faker->boolean(),
            'electric_seat'=> $this->faker->boolean(),
            'automatic_parking_brake'=> $this->faker->boolean(),
            'electric_exterior_mirror'=> $this->faker->boolean(),
            'tinted_windows'=> $this->faker->boolean(),
            'reversing_radar'=> $this->faker->boolean(),
            'sunroof'=> $this->faker->boolean(),
            'anti_start'=> $this->faker->boolean(),
            'remote_central'=> $this->faker->boolean(),
            'heated_seat'=> $this->faker->boolean(),
            'tire_pressure'=> $this->faker->boolean(),
            'aluminum_rims'=> $this->faker->boolean(),
            'sports_seat'=> $this->faker->boolean(),
            'air_conditioning'=> $this->faker->boolean(),
            'airbags'=> $this->faker->boolean(),
            'adjustable_steering'=> $this->faker->boolean(),
            'keyless_go'=> $this->faker->boolean(),
            'auto_air_conditioning'=> $this->faker->boolean(),
            'radio_control_steering'=> $this->faker->boolean(),
            'sports_suspension'=> $this->faker->boolean(),
            'anti_fog'=> $this->faker->boolean(),
            'non_smoker'=> $this->faker->boolean(),
            'speed_limiter'=> $this->faker->boolean(),
            'driver_identification_system'=> $this->faker->boolean(),
            
            ];
        
    }
}
