<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToServiceCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->json('provider_return_window')->nullable()->after('service_type');
            $table->tinyInteger('bill_status')->default(0)->comment('1 for Bill Before or at Start of Services ,2 for Bill After Services')->after('provider_return_window');
            $table->string('service_status')->comment('1 for Default Service , 2 for Customer Specific Service')->after('bill_status');
            $table->string('company_id')->nullable()->after('service_status');
            $table->string('customer_id')->nullable()->after('company_id');
            $table->json('service_charge')->nullable()->after('customer_id')->default(null)->change();
            $table->json('service_charge_v')->nullable()->after('service_charge');
            $table->json('one_time_payment')->nullable()->after('service_charge_v');
            $table->json('one_time_payment_v')->nullable()->after('one_time_payment');
            $table->json('emergency_hour')->nullable()->after('one_time_payment_v')->default(null)->change();
            $table->json('emergency_hour_v')->nullable()->after('emergency_hour');
            $table->string('minimum_assistance_hours_v',10)->nullable()->comment('virtual hours')->after('minimum_assistance_hours');
            $table->string('minimum_assistance_min_v',10)->nullable()->comment('virtual minutes')->after('minimum_assistance_min');
            $table->json('cancellation_hour1')->nullable()->default(null)->after('minimum_assistance_min_v')->change();
            $table->json('cancellation_hour1_v')->nullable()->after('cancellation_hour1');
            $table->double('hours_price_v',8,2)->default(0)->nullable()->comment('virtual hour price')->after('hours_price');
            $table->double('after_hours_price_v',8,2)->default(0)->nullable()->comment('virtual after hours price')->after('after_hours_price');
            $table->string('day_rate_price')->nullable()->after('after_hours_price_v');
            $table->string('day_rate_price_v')->nullable()->comment('virtual day rate price')->after('day_rate_price');
            $table->string('fixed_rate')->nullable()->after('day_rate_price_v');
            $table->string('fixed_rate_v')->nullable()->comment('virtual fixed rate price')->after('fixed_rate');
            $table->string('standard_in_person_multiply_provider')->nullable()->after('fixed_rate_v');
            $table->string('standard_rate_virtual_multiply_provider')->nullable()->after('standard_in_person_multiply_provider');
            $table->string('fixed_rate_multiply_provider')->nullable()->after('standard_rate_virtual_multiply_provider');
            $table->tinyInteger('rate_status')->default(0)->comment('1 for Hourly_Rate, 2 for Day_Rate, 3 for Hourly and Day Rate, 4 for Fixed_Rate')->after('fixed_rate_multiply_provider');

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
}
