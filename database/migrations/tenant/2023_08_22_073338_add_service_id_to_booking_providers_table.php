<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddServiceIdToBookingProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_providers', function (Blueprint $table) {
            // Add the new column with default null
            $table->unsignedBigInteger('service_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_providers', function (Blueprint $table) {
            // Drop the added column if needed
            $table->dropColumn('service_id');
        });
    }
}
