<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTimeslotsTable extends Migration
{
    public function up()
    {
        Schema::create('company_timeslots', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->integer('company_timeslot_type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_timeslots');
    }
}

