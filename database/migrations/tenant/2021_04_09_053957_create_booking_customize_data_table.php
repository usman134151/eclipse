<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingCustomizeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_customize_data', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_log_id')->unsigned();
            $table->integer('booking_id')->unsigned()->nullable();
            $table->text('customize_data')->nullable();
            $table->biginteger('added_by')->unsigned();
            $table->timestamps();
        });
        Schema::table('booking_customize_data', function($table) {
          $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
          $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_customize_data');
    }
}
