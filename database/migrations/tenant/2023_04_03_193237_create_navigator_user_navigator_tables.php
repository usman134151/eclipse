<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavigatorUserNavigatorTables extends Migration
{
    public function up()
    {
        Schema::dropIfExists('navigators');
        Schema::create('navigators', function (Blueprint $table) {
            $table->id();
            $table->string('navigator_label');
            $table->string('navigator_icon');
            $table->string('navigator_link');
            $table->timestamps();
        });
        Schema::dropIfExists('user_navigator');
        Schema::create('user_navigator', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('navigator_id');
            $table->integer('position');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');           //updated by waqar
            //$table->foreign('navigator_id')->references('id')->on('navigators')->onDelete('set null'); //updated by waqar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_navigator');
        Schema::dropIfExists('navigators');
    }
}
