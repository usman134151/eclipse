<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeamSpecializations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_specializations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            $table->integer('accommodation_id')->unsigned();
            $table->foreign('accommodation_id')->references('id')->on('accommodations');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('service_categories');
            $table->integer('specialization_id')->unsigned();
            $table->foreign('specialization_id')->references('id')->on('specializations');
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
        Schema::dropIfExists('team_specializations');

    }
}
