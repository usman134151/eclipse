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
        Schema::dropIfExists('user_departments');
        Schema::create('user_departments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();
         //   $table->foreign('department_id')->references('id')->on('departments');
          //  $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_departments');
    }
};
