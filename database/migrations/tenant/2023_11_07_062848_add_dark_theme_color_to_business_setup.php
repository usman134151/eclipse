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
        Schema::table('business_setups', function (Blueprint $table) {
            $table->string('dark_default_colour', 15)->nullable();
            $table->string('dark_foreground_colour', 15)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_setups', function (Blueprint $table) {
            $table->dropColumn('dark_default_colour');
            $table->dropColumn('dark_foreground_colour');
        });
    }
};
