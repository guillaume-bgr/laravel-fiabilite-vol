<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref');
            $table->integer('total_flight_time');
            $table->integer('canceled_flights');
            $table->integer('delayed_flights');
            $table->integer('flights_total_delay');
            $table->boolean('archived');
            $table->timestamp('created_at')->useCurrent()->default(new \Datetime());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
