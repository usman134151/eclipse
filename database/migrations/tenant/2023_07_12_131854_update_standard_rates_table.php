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
            // Add new columns
            // Add new columns
            $table->string('fixed_rate_p')->nullable();
            $table->string('fixed_rate_t')->nullable();
            $table->string('day_rate_price_p')->nullable();
            $table->string('day_rate_price_t')->nullable();
            $table->longText('service_charge_p')->nullable();
            $table->longText('service_charge_t')->nullable();
            $table->longText('one_time_payment_p')->nullable();
            $table->longText('one_time_payment_t')->nullable();
            $table->longText('emergency_hour_p')->nullable();
            $table->longText('emergency_hour_t')->nullable();
            $table->longText('cancellation_hour1_t')->nullable();
            $table->longText('cancellation_hour1_p')->nullable();

            // Modify column definitions
            $table->string('hours_price')->nullable()->change();
            $table->string('after_hours_price')->nullable()->default(0)->change();

            $table->string('payment_increment', 10)->nullable()->default(0);
            $table->string('payment_increment_p', 10)->nullable()->default(0);

            $table->longText('service_payment')->nullable()->default(null);
            $table->longText('service_payment_p')->nullable()->default(null);
        
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
            // Drop added columns
            $table->dropColumn([
                'fixed_rate_p',
                'fixed_rate_t',
                'day_rate_price_p',
                'day_rate_price_t',
                'service_charge_p',
                'service_charge_t',
                'one_time_payment_p',
                'one_time_payment_t',
                'emergency_hour_p',
                'emergency_hour_t',
                'cancellation_hour1_t',
                'cancellation_hour1_p'
            ]);

            // Rename modified columns
            $table->renameColumn('hours_price_p', 'hour_price_p');
            $table->renameColumn('hours_price_t', 'hour_price_t');
            $table->renameColumn('after_hours_price_p', 'after_hour_price_p');
            $table->renameColumn('after_hours_price_t', 'after_hour_price_t');

            // Restore original column definitions
            $table->string('hours_price')->default(null)->change();
            $table->string('hours_price_v')->default(null)->change();
            $table->string('after_hours_price')->default(null)->change();
            $table->string('after_hours_price_v')->default(null)->change();
            $table->string('hours_price_t')->default(null)->change();
            $table->string('after_hours_price_t')->default(null)->change();
            $table->string('hours_price_p')->default(null)->change();
            $table->string('after_hours_price_p')->default(null)->change();
            $table->string('rate_status')->default(null)->change();
        });
    }
};
