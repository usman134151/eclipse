<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingServiceChargesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {

    Schema::create('booking_service_charges', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('booking_id')->unsigned();
      $table->double('service_rate', 8, 2)->default(0)->nullable();
      $table->double('business_hour_rate', 8, 2)->default(0)->nullable();
      $table->double('after_hour_rate', 8, 2)->default(0)->nullable();
      $table->double('emergency_hour_rate', 8, 2)->default(0)->nullable();
      $table->double('virtual_rate', 8, 2)->default(0)->nullable();
      $table->timestamps();
    });

    Schema::table('booking_service_charges', function($table) {
      $table->foreign('booking_id')->references('id')->on('bookings');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('booking_service_charges');
  }
}
