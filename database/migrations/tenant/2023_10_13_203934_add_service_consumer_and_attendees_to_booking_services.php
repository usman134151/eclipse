<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('booking_services', function (Blueprint $table) {
            $table->text('service_consumer_manual')->nullable();
            $table->text('attendees_manual')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_services', function (Blueprint $table) {
            $table->dropColumn('service_consumer_manual');
            $table->dropColumn('attendees_manual');
        });
    }
};
