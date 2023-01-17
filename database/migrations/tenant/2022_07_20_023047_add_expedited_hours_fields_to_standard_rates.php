<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExpeditedHoursFieldsToStandardRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('standard_rates', function (Blueprint $table) {
            $table->json('expedited_hour')->nullable()->after('after_hours_price_v');
            $table->json('expedited_hour_v')->nullable()->after('expedited_hour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('standard_rates', function (Blueprint $table) {
            //
        });
    }
}
