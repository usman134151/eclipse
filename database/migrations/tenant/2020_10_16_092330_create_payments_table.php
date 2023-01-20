<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('payments', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('booking_id')->unsigned();
      $table->tinyInteger('payment_method')->nullable();
      $table->string('payment_method_type');
      $table->string('payment_reference')->nullable();
      $table->double('sub_total', 8, 2)->default(0);
      $table->double('coupon_discount_amount', 8, 2)->default(0)->nullable();
      $table->text('additional_label')->nullable();
      $table->double('additional_charge', 8, 2)->nullable();
      $table->text('additional_label_provider')->nullable();
      $table->double('additional_charge_provider', 8, 2)->default(0)->nullable();
      $table->double('total_amount', 8, 2)->default(0)->nullable();
      $table->double('outstanding_amount', 8, 2)->default(0)->nullable();
      $table->integer('coupon_id')->unsigned()->nullable();
      $table->tinyInteger('coupon_type')->nullable();
      $table->biginteger('payment_by')->unsigned();
      $table->string('payment_proceed_on','50')->nullable();
      $table->timestamps();
    });
    // Schema::table('payments', function($table) {
    //   $table->foreign('booking_id')->references('id')->on('bookings');
    // });
    Schema::table('payments', function($table) {
      $table->foreign('payment_by')->references('id')->on('users');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('payments');
  }
}
