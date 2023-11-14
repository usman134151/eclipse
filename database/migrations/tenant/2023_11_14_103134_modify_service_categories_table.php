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
            $table->string('hours_price', 10)->nullable()->default(null)->change();
            $table->string('hours_price_v', 10)->nullable()->default(null)->change();
            $table->string('after_hours_price', 10)->nullable()->default(null)->change();
            $table->string('after_hours_price_v', 10)->nullable()->default(null)->change();
            $table->string('minimum_assistance_hours', 10)->nullable()->default(null)->change();
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
            //
        });
    }
};
