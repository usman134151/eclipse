<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRateFieldsToStandardRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('standard_rates', function (Blueprint $table) {
            $table->double('day_rate_price', 8, 2)->default(0)->after('after_hours_price_v');
            $table->double('day_rate_price_v', 8, 2)->default(0)->after('day_rate_price');
            $table->double('fixed_rate', 8, 2)->default(0)->after('day_rate_price_v');
            $table->double('fixed_rate_v', 8, 2)->default(0)->after('fixed_rate');
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
