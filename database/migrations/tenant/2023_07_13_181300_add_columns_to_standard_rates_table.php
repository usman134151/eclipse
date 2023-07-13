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
        Schema::table('standard_rates', function (Blueprint $table) {
            $table->longText('expedited_hour_p')->nullable()->default(null);
            $table->longText('expedited_hour_t')->nullable()->default(null);
            $table->longText('service_payment_t')->nullable()->default(null);
            $table->longText('service_payment_v')->nullable()->default(null);
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
            $table->dropColumn('expedited_hour_p');
            $table->dropColumn('expedited_hour_t');
            $table->dropColumn('service_payment_t');
            $table->dropColumn('service_payment_v');
        });
    }
};
