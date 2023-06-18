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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('company_timeslots');
        Schema::dropIfExists('company_timeslot_days');
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id');
            $table->string('model_type', 255);
            $table->unsignedBigInteger('timezone_id');
            $table->unsignedBigInteger('time_format')->default(2);
            $table->longText('working_days');
            $table->timestamps();

            // Add foreign key constraints if necessary
            // $table->foreign('model_id')->references('id')->on('models');
            // $table->foreign('timezone_id')->references('id')->on('timezones');
        });
        Schema::create('schedule_timeslots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->string('timeslot_day');
            $table->unsignedBigInteger('timeslot_type')->nullable()->default(1);
            $table->string('timeslot_start_time');
            $table->string('timeslot_end_time');
            $table->timestamps();

            // Add foreign key constraints if necessary
            // $table->foreign('schedule_id')->references('id')->on('schedules');
        });
        Schema::create('schedule_holidays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->date('holiday_date');
            $table->string('holiday_day');
            $table->timestamps();

            // Add foreign key constraints if necessary
            // $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
