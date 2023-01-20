<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_accommodations', function (Blueprint $table) {
          $table->increments('id');
          $table->biginteger('user_id')->unsigned();
          $table->integer('accommodation_id')->unsigned();
          $table->integer('added_by');
          $table->timestamps();
        });
        Schema::table('provider_accommodations', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('accommodation_id')->references('id')->on('accommodations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provider_accommodations');
    }
}
