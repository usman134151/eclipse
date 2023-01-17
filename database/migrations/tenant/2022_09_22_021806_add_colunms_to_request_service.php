<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunmsToRequestService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_request_notifications', function (Blueprint $table) {
            $table->dateTime('first_notified_datetime')->nullable()->after('request_info');
            $table->dateTime('last_notified_datetime')->nullable()->after('first_notified_datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_request_notifications', function (Blueprint $table) {
            //
        });
    }
}
