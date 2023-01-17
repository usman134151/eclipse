<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_services', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_log_id')->unsigned();
            $table->integer('booking_id')->unsigned();
            $table->integer('accommodation_id')->unsigned();
            $table->text('attendees')->nullable();
            $table->text('service_consumer')->nullable();
            $table->enum('is_manual_consumer',[0,1])->nullable();
            $table->enum('is_manual_attendees',[0,1])->nullable();
            $table->text('services')->nullable();
            $table->text('service_types')->nullable();
            $table->text('specialization')->nullable();
            $table->text('meeting_link')->nullable();
            $table->text('meeting_phone')->nullable();
            $table->text('meeting_passcode')->nullable();
            $table->text('day_rate')->nullable();
            $table->text('duration_day')->nullable();
            $table->text('duration_hour')->nullable();
            $table->text('duration_minute')->nullable();
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
            $table->text('provider_count')->nullable();
            $table->text('time_zone')->nullable();
            $table->enum('status',[0,1])->default(0)->comment('0 for old,1 for created');
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
        Schema::dropIfExists('booking_services');
    }
}
