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
        Schema::table('service_categories', function (Blueprint $table) {
            $table->renameColumn('hour_price_p', 'hours_price_p');
            $table->renameColumn('hour_price_t', 'hours_price_t');
            $table->renameColumn('after_hour_price_p', 'after_hours_price_p');
            $table->renameColumn('after_hour_price_t', 'after_hours_price_t');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->renameColumn('hours_price_p', 'hour_price_p');
            $table->renameColumn('hours_price_t', 'hour_price_t');
            $table->renameColumn('after_hours_price_p', 'after_hour_price_p');
            $table->renameColumn('after_hours_price_t', 'after_hour_price_t');
        });
    }
};
