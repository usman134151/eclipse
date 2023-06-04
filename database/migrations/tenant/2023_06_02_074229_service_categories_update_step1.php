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
            $table->integer('display_in_application')->default(1);
            $table->integer('display_in_quote')->default(1);
            $table->integer('disable_for_companies')->default(0);
            $table->string('hour_price_t')->nullable();
            $table->string('after_hour_price_t')->nullable();
            $table->string('hour_price_p')->nullable();
            $table->string('after_hour_price_p')->nullable();
            $table->string('fixed_rate_p')->nullable();
            $table->string('fixed_rate_t')->nullable();
            $table->string('day_rate_price_p')->nullable();
            $table->string('day_rate_price_t')->nullable();
            $table->integer('min_providers_p')->nullable();
            $table->integer('max_providers_p')->nullable();
            $table->integer('default_providers_p')->nullable();
            $table->integer('provider_limit_p')->nullable();
            $table->integer('maximum_assistance_hours_p')->nullable();
            $table->integer('maximum_assistance_min_p')->nullable();
            $table->integer('minimum_assistance_hours_p')->nullable();
            $table->integer('minimum_assistance_min_p')->nullable();
            $table->string('provider_return_window_p')->nullable();
            $table->integer('min_providers_t')->nullable();
            $table->integer('max_providers_t')->nullable();
            $table->integer('default_providers_t')->nullable();
            $table->integer('provider_limit_t')->nullable();
            $table->integer('maximum_assistance_hours_t')->nullable();
            $table->integer('maximum_assistance_min_t')->nullable();
            $table->integer('minimum_assistance_hours_t')->nullable();
            $table->integer('minimum_assistance_min_t')->nullable();
            $table->string('provider_return_window_t')->nullable();
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
            $table->dropColumn([
                'display_in_application',
                'display_in_quote',
                'disable_for_companies',
                'hour_price_t',
                'after_hour_price_t',
                'hour_price_p',
                'after_hour_price_p',
                'fixed_rate_p',
                'fixed_rate_t',
                'day_rate_price_p',
                'day_rate_price_t',
                'min_providers_p',
                'max_providers_p',
                'default_providers_p',
                'provider_limit_p',
                'maximum_assistance_hours_p',
                'maximum_assistance_min_p',
                'minimum_assistance_hours_p',
                'minimum_assistance_min_p',
                'provider_return_window_p'
            ]);
        });
    }
};
