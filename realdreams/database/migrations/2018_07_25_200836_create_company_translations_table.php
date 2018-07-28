<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->integer('company_id')->unsigned();
            $table->string('locale')->index();
            $table->unique(['company_id','locale']);
            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
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
        Schema::dropIfExists('company_translations');
    }
}
