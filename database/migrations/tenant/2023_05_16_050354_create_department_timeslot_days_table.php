<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentTimeslotDaysTable extends Migration
{
    public function up()
    {
        Schema::create('department_timeslot_days', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_timeslot_id');
            $table->string('department_timeslot_day');
            $table->time('department_timeslot_start_time');
            $table->time('department_timeslot_end_time');
            $table->timestamps();

         
        });
    }

    public function down()
    {
        Schema::dropIfExists('department_timeslot_days');
    }
}
