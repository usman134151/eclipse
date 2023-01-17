<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdColunmsToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->datetime('booking_reschedule_at')->nullable()->after('cancellation_notes');
            $table->datetime('reschedule_start_at')->nullable()->after('booking_reschedule_at');
            $table->datetime('reschedule_end_at')->nullable()->after('reschedule_start_at');
            $table->integer('reschedule_by')->nullable()->after('reschedule_end_at');
            $table->string('reschedule_reason')->nullable()->after('reschedule_by');
            $table->integer('reschedule_status')->nullable()->after('reschedule_reason');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
