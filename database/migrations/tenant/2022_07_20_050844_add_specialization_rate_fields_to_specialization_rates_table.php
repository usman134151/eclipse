<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSpecializationRateFieldsToSpecializationRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('specialization_rates', function (Blueprint $table) {
            $table->json('specialization_rate')->after('specialization_other')->default(null)->change();
            $table->json('specialization_rate_v')->nullable()->after('specialization_rate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialization_rates', function (Blueprint $table) {
            //
        });
    }
}
