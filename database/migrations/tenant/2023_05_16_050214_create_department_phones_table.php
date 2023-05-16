<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentPhonesTable extends Migration
{
    public function up()
    {
        Schema::create('department_phones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->string('department_phone_title');
            $table->string('department_phone_number');
            $table->timestamps();

            $table->foreign('department_id')->references('id')->on('departments');
        });
    }

    public function down()
    {
        Schema::dropIfExists('department_phones');
    }
}