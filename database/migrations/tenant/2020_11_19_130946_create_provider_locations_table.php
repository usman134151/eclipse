<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_locations', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->integer('location_id')->unsigned();
        });
        Schema::table('provider_locations', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('provider_locations', function($table) {
          $table->foreign('location_id')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_locations');
    }
}
