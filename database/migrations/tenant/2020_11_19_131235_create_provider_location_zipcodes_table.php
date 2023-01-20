<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderLocationZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_location_zipcodes', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->integer('location_id')->unsigned();
            $table->integer('zip_id')->unsigned();
      });
      Schema::table('provider_location_zipcodes', function($table) {
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      });
      Schema::table('provider_location_zipcodes', function($table) {
        $table->foreign('location_id')->references('id')->on('states');
      });
      // Schema::table('provider_location_zipcodes', function($table) {
      //   $table->foreign('zip_id')->references('id')->on('users')->onDelete('zip_codes');
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_location_zipcodes');
    }
}
