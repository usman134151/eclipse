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
            $table->boolean('hours_price')->nullable()->default(0)->change();
            $table->boolean('hours_price_t')->nullable()->default(0)->change();
            $table->boolean('hours_price_v')->nullable()->default(0)->change();
            $table->boolean('hours_price_p')->nullable()->default(0)->change();
            $table->boolean('after_hours_price')->nullable()->default(0)->change();
            $table->boolean('after_hours_price_t')->nullable()->default(0)->change();
            $table->boolean('after_hours_price_v')->nullable()->default(0)->change();
            $table->boolean('after_hours_price_p')->nullable()->default(0)->change();
            $table->boolean('minimum_assistance_hours')->nullable()->default(0)->change();
            $table->boolean('maximum_assistance_hours')->nullable()->default(0)->change();
           
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
            $table->boolean('disable_for_companies')->change();
            $table->unsignedInteger('minimum_assistance_min')->change();
        });
    }
};
