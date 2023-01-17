<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverrideBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('bookings', function (Blueprint $table) {
        $table->enum('is_additional_override_booking',[0,1])->nullable()->comment('1 override,0 not override')->after('phone');
        $table->string('override_booking_duration','10')->nullable()->after('is_additional_override_booking');
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
