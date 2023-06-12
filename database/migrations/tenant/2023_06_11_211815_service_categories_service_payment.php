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
            $table->longText('service_payment')->nullable()->default(null);
            $table->longText('service_payment_v')->nullable()->default(null);
            $table->longText('service_payment_p')->nullable()->default(null);
            $table->longText('service_payment_t')->nullable()->default(null);
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
            $table->dropColumn('service_payment');
            $table->dropColumn('service_payment_v');
            $table->dropColumn('service_payment_p');
            $table->dropColumn('service_payment_t');
        });
    }
};
