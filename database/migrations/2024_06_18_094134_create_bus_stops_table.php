<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_stops', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->string('up_or_down');
            $table->unsignedBigInteger('bus_information_id');
            $table->foreign('bus_information_id')->references('id')->on('bus_informations');
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
        Schema::dropIfExists('bus_stops');
    }
};
