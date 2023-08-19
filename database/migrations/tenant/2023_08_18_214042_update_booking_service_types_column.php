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
        ADD COLUMN new_service_type INT AFTER service_type
        ");

        // Update values
        DB::statement("
        UPDATE bookings
        SET new_service_type = CASE service_type
            WHEN '1' THEN 1
            WHEN '2' THEN 2
            WHEN '3' THEN 3
            ELSE NULL
        END
        ");

        // Remove the old enum column and rename the new column
        DB::statement("
        ALTER TABLE bookings
        DROP COLUMN service_type,
        CHANGE COLUMN new_service_type service_type INT
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
