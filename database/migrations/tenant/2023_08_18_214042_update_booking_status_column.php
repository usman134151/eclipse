<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add a new integer column
        DB::statement("
        ALTER TABLE bookings
        ADD COLUMN new_booking_status INT AFTER service_type
        ");

        // Update values
        DB::statement("
        UPDATE bookings
        SET new_booking_status = CASE booking_status
            WHEN '0' THEN 0
            WHEN '1' THEN 1
            WHEN '2' THEN 2
            ELSE NULL
        END
        ");

        // Remove the old enum column and rename the new column
        DB::statement("
        ALTER TABLE bookings
        DROP COLUMN booking_status,
        CHANGE COLUMN new_booking_status booking_status INT
        ");
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
};
