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
            // Modify existing columns
            $table->string('after_hours_price', 10)->nullable()->change();
            $table->string('after_hours_price_v', 10)->nullable()->change();
            $table->string('fixed_rate', 255)->nullable()->change();
            $table->string('fixed_rate_p', 255)->nullable()->change();
            $table->string('fixed_rate_t', 255)->nullable()->change();
            $table->string('fixed_rate_v', 255)->nullable()->change();
            $table->string('hours_price', 255)->nullable()->change();
            
            $table->string('hours_price_v', 255)->nullable()->change();
            $table->string('day_rate_price', 255)->nullable()->change();
            $table->string('day_rate_price_p', 255)->nullable()->change();
            $table->string('day_rate_price_t', 255)->nullable()->change();
            $table->string('day_rate_price_v', 255)->nullable()->change();
            $table->string('expedited_hour')->nullable()->change();
            $table->string('expedited_hour_v')->nullable()->change();

            // Add new columns
            $table->string('after_hours_price_t', 10)->nullable()->default(null);
            $table->string('after_hours_price_p', 10)->nullable()->default(null);
            $table->longText('cancellation_hour1')->nullable()->default(null);
            $table->longText('cancellation_hour1_v')->nullable()->default(null);
            $table->string('cancellation_hour2')->nullable()->default(null);
            $table->string('cancellation_percentage1')->nullable()->default(null);
            $table->string('cancellation_percentage2')->nullable()->default(null);
            $table->longText('emergency_hour')->nullable()->default(null);
            $table->longText('emergency_hour_v')->nullable()->default(null);
            $table->longText('service_charge')->nullable()->default(null);
            $table->longText('service_charge_v')->nullable()->default(null);
            $table->string('hours_price_p', 255)->nullable()->default(null);
            $table->string('hours_price_t', 255)->nullable()->default(null);

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
                'after_hours_price_t',
                'after_hours_price_v',
                'cancellation_hour1',
                'cancellation_hour1_v',
                'cancellation_hour2',
                'cancellation_percentage1',
                'cancellation_percentage2',
                'emergency_hour',
                'emergency_hour_v',
                'service_charge',
                'service_charge_v',
            ]);

            // Restore original column definitions
            $table->string('after_hours_price', 255)->nullable()->change();
            $table->string('after_hours_price_p', 255)->nullable()->change();
            $table->string('fixed_rate', 255)->nullable()->change();
            $table->string('fixed_rate_p', 255)->nullable()->change();
            $table->string('fixed_rate_t', 255)->nullable()->change();
            $table->string('fixed_rate_v', 255)->nullable()->change();
            $table->string('hours_price', 255)->nullable()->change();
            $table->string('hours_price_p', 255)->nullable()->change();
            $table->string('hours_price_v', 255)->nullable()->change();
            $table->string('day_rate_price', 255)->nullable()->change();
            $table->string('day_rate_price_p', 255)->nullable()->change();
            $table->string('day_rate_price_t', 255)->nullable()->change();
            $table->string('day_rate_price_v', 255)->nullable()->change();
            $table->string('expedited_hour')->nullable()->change();
            $table->string('expedited_hour_v')->nullable()->change();
        });
    }
};
