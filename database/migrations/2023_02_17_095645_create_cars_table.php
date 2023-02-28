<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('brand');
            $table->string('model');
            $table->string('date_car');
            $table->string('city');
            $table->text('description')->nullable();
            $table->enum('gearbox',['all','automatique','manual'])->nullable();
            $table->string('gray_card_holder');
            $table->string('gray_card_number');
            $table->string('mileage');
            $table->string('origin')->nullable();
            $table->date('date_cleared')->nullable();
            $table->boolean('first_hand')->nullable();
            $table->enum('fuel',['all','diasel','electric','essence','lgp','hybrid'])->nullable();
            $table->foreignUuid('country_id')->nullable();
            $table->enum('condition_car',['excellent','very_Good','good','damaged','pieces','correct']);
            $table->integer('number_view')->nullable();
            $table->integer('number_click')->nullable();
            $table->integer('price')->nullable();
            $table->foreignUuid('user_id');
            // $table->foreignUuid('car_info_id');
            $table->boolean('visibility')->nullable();
            $table->boolean('published')->default(0);
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
        Schema::dropIfExists('cars');
    }
}
