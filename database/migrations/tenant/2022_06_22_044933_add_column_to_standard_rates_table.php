<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToStandardRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('standard_rates', function (Blueprint $table) {
            $table->double('hours_price_v', 8, 2)->default(0)->after('hours_price');
            $table->double('after_hours_price_v', 8, 2)->default(0)->after('after_hours_price');
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
