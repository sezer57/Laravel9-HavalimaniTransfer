<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('transfer_id');
            $table->integer('from_location_id');
            $table->integer('to_location_id');
            $table->float('price');
            $table->string('Airline',50);
            $table->string('flightnumber',10);
            $table->string('flightdate',10);
            $table->string('flighttime',10);
            $table->string('pickuptime',10);
            $table->string('note',150);
            $table->string('ip',20);
            $table->string('status',30)->default('New');
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
        Schema::dropIfExists('rezervations');
    }
}
