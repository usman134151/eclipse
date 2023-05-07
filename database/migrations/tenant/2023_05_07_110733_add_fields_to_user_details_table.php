<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUserDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->string('user_pronouns')->nullable();
            $table->string('user_position')->nullable();
            $table->text('user_introduction')->nullable();
            $table->string('user_introduction_file')->nullable();
        });
    }

    public function down()
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->dropColumn(['user_pronouns', 'user_position', 'user_introduction', 'user_introduction_file']);
        });
    }
}

