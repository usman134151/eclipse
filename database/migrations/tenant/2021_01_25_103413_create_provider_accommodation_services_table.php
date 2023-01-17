<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderAccommodationServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_accommodation_services', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('accommodation_id');
          $table->integer('service_id')->unsigned();
        });
        Schema::table('provider_accommodation_services', function($table) {
          $table->foreign('service_id')->references('id')->on('service_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_accommodation_services');
    }
}
