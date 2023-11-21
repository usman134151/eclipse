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
        Schema::create('reschedule_booking_log', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id')->nullable()->default(null);
            $table->dateTime('previous_start_time')->nullable()->default(null);
            $table->dateTime('previous_end_time')->nullable()->default(null);
            $table->integer('charges')->nullable()->default(null);

            $table->unsignedBigInteger('reschedule_by')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reschedule_booking_log');
    }
};
