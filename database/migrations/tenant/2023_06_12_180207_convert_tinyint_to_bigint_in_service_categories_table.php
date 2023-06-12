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
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->bigInteger('bill_status')->change();
            $table->string('hours_price', 10)->default(null)->change();
            $table->string('hours_price_v', 10)->default(null)->change();
            $table->string('after_hours_price', 10)->default(null)->change();
            $table->string('after_hours_price_v', 10)->default(null)->change();

            $table->string('maximum_assistance_hours', 10)->default(null)->change();
            $table->string('maximum_assistance_hours_p', 10)->default(null)->change();
            $table->string('maximum_assistance_hours_t', 10)->default(null)->change();
            $table->string('maximum_assistance_hours_v', 10)->default(null)->change();
            
            $table->string('maximum_assistance_min', 10)->default(null)->change();
            $table->string('maximum_assistance_min_p', 10)->default(null)->change();
            $table->string('maximum_assistance_min_t', 10)->default(null)->change();
            $table->string('maximum_assistance_min_v', 10)->default(null)->change();
            
            
            $table->string('minimum_assistance_hours', 10)->default(null)->change();
            $table->string('minimum_assistance_hours_p', 10)->default(null)->change();
            $table->string('minimum_assistance_hours_t', 10)->default(null)->change();
            $table->string('minimum_assistance_hours_v', 10)->default(null)->change();

            
            $table->string('minimum_assistance_min', 10)->default(null)->change();
            $table->string('minimum_assistance_min_p', 10)->default(null)->change();
            $table->string('minimum_assistance_min_t', 10)->default(null)->change();
            $table->string('minimum_assistance_min_v', 10)->default(null)->change();
            
            
            $table->string('hours_price_t', 10)->default(null)->change();
            $table->string('after_hours_price_t', 10)->default(null)->change();
            $table->string('hours_price_p', 10)->default(null)->change();
            $table->string('after_hours_price_p', 10)->default(null)->change();
            $table->string('rate_status', 10)->default(null)->change();

            $table->string('default_providers', 10)->default(null)->change();
            $table->string('default_providers_t', 10)->default(null)->change();
            $table->string('default_providers_p', 10)->default(null)->change();
            $table->string('default_providers_v', 10)->default(null)->change();

            $table->string('min_providers', 10)->default('0')->change();
            $table->string('min_providers_t', 10)->default('0')->change();
            $table->string('min_providers_p', 10)->default('0')->change();
            $table->string('min_providers_v', 10)->default('0')->change();

            $table->string('max_providers', 10)->default('999')->change();
            $table->string('max_providers_t', 10)->default('999')->change();
            $table->string('max_providers_p', 10)->default('999')->change();
            $table->string('max_providers_v', 10)->default('999')->change();


            $table->string('provider_limit', 10)->default('999')->change();
            $table->string('provider_limit_p', 10)->default('999')->change();
            $table->string('provider_limit_t', 10)->default('999')->change();
            $table->string('provider_limit_v', 10)->default('999')->change();
            

            
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
            // If you need to revert the changes, you can modify the columns back to tinyint.
            $table->tinyInteger('bill_status')->change();
            $table->tinyInteger('hours_price')->change();
            $table->tinyInteger('hours_price_v')->change();
            $table->tinyInteger('after_hours_price')->change();
            $table->tinyInteger('after_hours_price_v')->change();
            $table->tinyInteger('maximum_assistance_hours')->change();
            $table->tinyInteger('hours_price_t')->change();
            $table->tinyInteger('after_hours_price_t')->change();
            $table->tinyInteger('hours_price_p')->change();
            $table->tinyInteger('after_hours_price_p')->change();
            $table->tinyInteger('rate_status')->change();
        });
    }
};
