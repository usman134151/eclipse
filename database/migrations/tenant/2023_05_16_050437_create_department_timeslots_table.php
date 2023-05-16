<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentTimeslotsTable extends Migration
{
    public function up()
    {
        Schema::create('department_timeslots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->string('department_timeslot_type');
            $table->timestamps();

           
        });
    }

    public function down()
    {
        Schema::dropIfExists('department_timeslots');
    }
}
