<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingPaymentCronsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('booking_payment_crons', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('booking_id')->unsigned();
      $table->datetime('payment_deduct_time')->nullable();
      $table->string('payment_status')->nullable();
      $table->enum('cron_status',[0,1])->default(0)->comment('0 for not proceed,1 for proceed');
      $table->biginteger('added_by')->unsigned();
      $table->timestamps();
    });
    Schema::table('booking_payment_crons', function($table) {
      $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('booking_payment_crons');
  }
}
