<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingSpecializationsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('booking_specializations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('booking_id')->unsigned();
      $table->integer('specialization_id')->unsigned();
      $table->timestamps();
    });
    Schema::table('booking_specializations', function($table) {
      $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
      $table->foreign('specialization_id')->references('id')->on('specializations')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('booking_specializations');
  }
}
