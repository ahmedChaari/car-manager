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
            $table->date('date_car');
            $table->string('city');
            $table->text('description');
            $table->enum('gearbox',['all','automatique','manual']);
            $table->string('gray_card_holder');
            $table->string('gray_card_number');
            $table->string('mileage');
            $table->string('origin');
            $table->date('date_cleared');
            $table->string('first_hand');
            $table->enum('fuel',['all','diasel','electric','lgp','hybrid']);
            $table->foreignUuid('country_id');
            $table->enum('condition_car',['excellent','very Good','damaged','for pieces','correct']);
            $table->integer('number_view');
            $table->integer('number_click');
            $table->integer('price');
            $table->foreignUuid('user_id');
            $table->boolean('visibility');
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
