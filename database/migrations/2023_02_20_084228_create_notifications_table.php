<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id');
            $table->string('band');
            $table->enum('type_vendeur',['particular','professional']);
            $table->string('city');
            $table->string('model');
            $table->string('origin');
            $table->string('first_hand');
            $table->enum('fuel',['all','diasel','electric','lgp','hybrid']);
            $table->string('kilometrage');
            $table->enum('condition_car',['excellent','very Good','damaged','for pieces','correct']);
            $table->enum('method',['call','sms','email']);
            $table->enum('daily',['day','week','mounth']);
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
        Schema::dropIfExists('notifications');
    }
}
