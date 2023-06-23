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
        Schema::table('schedule_holidays', function (Blueprint $table) {
            $table->integer('repeat_yearly')->default(0)->nullable();
        });
    }

    public function down()
    {
        Schema::table('schedule_holidays', function (Blueprint $table) {
            $table->dropColumn('repeat_yearly');
        });
    }
};
