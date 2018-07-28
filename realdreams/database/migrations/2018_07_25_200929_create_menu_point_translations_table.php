<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuPointTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_point_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('menu_point_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['menu_point_id','locale']);
            $table->foreign('menu_point_id')->references('id')->on('menu_point')->onDelete('cascade');
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
        Schema::dropIfExists('menu_point_translations');
    }
}
