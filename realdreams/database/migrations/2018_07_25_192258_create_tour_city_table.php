<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_city', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('tour_id')->unsigned();
            $table->foreign('tour_id')->references('id')
                ->on('tour');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')
                ->on('city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_city');
    }
}
