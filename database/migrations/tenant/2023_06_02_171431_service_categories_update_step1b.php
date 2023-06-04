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
            $table->string('standard_in_person_multiply_provider_p', 5)->nullable();
            $table->string('standard_in_person_multiply_provider_t', 5)->nullable();
            $table->string('billing_increment_p', 10)->nullable();
            $table->string('billing_increment_t', 10)->nullable();
            $table->longText('service_charge_p')->nullable();
            $table->longText('service_charge_t')->nullable();
            $table->longText('one_time_payment_p')->nullable();
            $table->longText('one_time_payment_t')->nullable();
            $table->longText('emergency_hour_p')->nullable();
            $table->longText('emergency_hour_t')->nullable();
            $table->longText('cancellation_hour1_t')->nullable();
            $table->longText('cancellation_hour1_p')->nullable();
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
                'standard_in_person_multiply_provider_p',
                'standard_in_person_multiply_provider_t',
                'billing_increment_p',
                'billing_increment_t',
                'service_charge_p',
                'service_charge_t',
                'one_time_payment_p',
                'one_time_payment_t',
                'emergency_hour_p',
                'emergency_hour_t',
                'cancellation_hour1_t',
                'cancellation_hour1_p'
            ]);
        });
    }
};
