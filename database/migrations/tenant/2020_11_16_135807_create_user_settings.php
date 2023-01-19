<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->tinyInteger('email_enabled')->nullable()->default(0)->comment('0=enable, 1=disable');
            $table->tinyInteger('sms_enabled')->nullable()->default(0)->comment('0=enable, 1=disable');
            $table->tinyInteger('call_enabled')->nullable()->default(0)->comment('0=enable, 1=disable');
            $table->tinyInteger('notification_enabled')->nullable()->default(0)->comment('0=enable, 1=disable');
            $table->string('default_location')->nullable()->comment('default location for booking');
            $table->string('booking_availablity')->nullable()->comment('booking availablity');
            $table->string('holiday_preferences')->nullable()->comment('holiday preferences');
            $table->string('after_hour_preferences')->nullable()->comment('after hour preferences');
            $table->string('last_minute_booking')->nullable()->comment('last minute booking');
            $table->integer('overlapping_booking_count')->nullable()->default(0)->comment('overlapping bookings count for provider');
            $table->integer('holiday_booking_count')->nullable()->default(0)->comment('Holiday bookings count for provider');
            $table->string('booking_break_time')->nullable()->comment('provider next booking break time');
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
        Schema::dropIfExists('user_settings');
    }
}
