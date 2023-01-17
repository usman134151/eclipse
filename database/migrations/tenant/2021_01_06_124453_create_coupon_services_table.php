<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coupon_id')->unsigned();
            $table->integer('accommodation_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('coupon_services', function($table) {
          $table->foreign('coupon_id')->references('id')->on('coupons');
          $table->foreign('accommodation_id')->references('id')->on('accommodations');
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
        Schema::dropIfExists('coupon_services');
    }
}
