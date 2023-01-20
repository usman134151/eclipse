<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponAccommodationsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('coupon_accommodations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('coupon_id')->unsigned();
      $table->integer('accommodation_id')->unsigned();
      $table->biginteger('added_by')->unsigned();
      $table->timestamps();
    });
    Schema::table('coupon_accommodations', function($table) {
      $table->foreign('coupon_id')->references('id')->on('coupons')->onDelete('cascade');
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
    Schema::dropIfExists('coupon_accommodations');
  }
}
