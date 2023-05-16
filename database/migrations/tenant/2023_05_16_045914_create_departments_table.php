<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('name');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('added_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('industry_id')->nullable();
           
            $table->string('department_website')->nullable();
            $table->unsignedBigInteger('language_id')->nullable();
            $table->date('department_service_start_date')->nullable();
            $table->date('department_service_end_date')->nullable();
            $table->string('department_timezone')->nullable();
            $table->string('department_logo')->nullable();
            $table->string('department_timeformat')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
}