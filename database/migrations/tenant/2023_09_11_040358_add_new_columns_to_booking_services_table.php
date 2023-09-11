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
        Schema::table('booking_services', function (Blueprint $table) {
            $table->decimal('service_total', 8, 2)->nullable();
            $table->decimal('billed_total', 8, 2)->nullable();
            $table->longText('service_calculations')->nullable();
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
            $table->dropColumn('service_total');
            $table->dropColumn('billed_total');
            $table->dropColumn('service_calculations');
        });
    }
};
