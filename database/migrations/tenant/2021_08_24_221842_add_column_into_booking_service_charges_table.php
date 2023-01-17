<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIntoBookingServiceChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('booking_service_charges', function (Blueprint $table) {
        $table->integer('emergency_hour_duration')->nullable();
        $table->integer('business_hour_duration')->nullable();
        $table->integer('after_hour_duration')->nullable();
        $table->integer('virtual_duration')->nullable();
        $table->double('emergency_hour_price', 8, 2)->default(0)->nullable();
        $table->double('business_hour_price', 8, 2)->default(0)->nullable();
        $table->double('after_hour_price', 8, 2)->default(0)->nullable();
        $table->double('virtual_price', 8, 2)->default(0)->nullable();
      });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
