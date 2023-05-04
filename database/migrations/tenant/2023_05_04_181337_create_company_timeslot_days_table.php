<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTimeslotDaysTable extends Migration
{
    public function up()
    {
        Schema::create('company_timeslot_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_timeslot_id')->constrained('company_timeslots')->onDelete('cascade');
            $table->string('company_timeslot_day');
            $table->time('company_timeslot_start_time');
            $table->time('company_timeslot_end_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_timeslot_days');
    }
}
