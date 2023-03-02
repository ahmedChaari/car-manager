<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_infos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('car_id')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->boolean('dvice');
            $table->boolean('gps');
            $table->boolean('volant_sport');
            $table->boolean('alarm');
            $table->boolean('electric_glass');
            $table->boolean('rain_sensor');
            $table->boolean('aide_parking');
            $table->boolean('esp');
            $table->boolean('power_steering');
            $table->boolean('abs');
            $table->boolean('xenon_headlights');
            $table->boolean('board_computer');
            $table->boolean('maintenance_book');
            $table->boolean('panoramic_sunroof');
            $table->boolean('cruise_control');
            $table->boolean('anti_slip');
            $table->boolean('leather_interior');
            $table->boolean('head_up_display');
            $table->boolean('electric_hood');
            $table->boolean('electric_seat');
            $table->boolean('automatic_parking_brake');
            $table->boolean('electric_exterior_mirror');
            $table->boolean('tinted_windows');
            $table->boolean('reversing_radar');
            $table->boolean('sunroof');
            $table->boolean('anti_start');
            $table->boolean('remote_central');
            $table->boolean('heated_seat');
            $table->boolean('tire_pressure');
            $table->boolean('aluminum_rims');
            $table->boolean('sports_seat');
            $table->boolean('air_conditioning');
            $table->boolean('airbags');
            $table->boolean('adjustable_steering');
            $table->boolean('keyless_go');
            $table->boolean('auto_air_conditioning');
            $table->boolean('radio_control_steering');
            $table->boolean('sports_suspension');
            $table->boolean('anti_fog');
            $table->boolean('non_smoker');
            $table->boolean('speed_limiter');
            $table->boolean('driver_identification_system');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_infos');
    }
}
