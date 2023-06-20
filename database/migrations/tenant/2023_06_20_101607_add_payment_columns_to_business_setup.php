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
        Schema::table('business_setups', function (Blueprint $table) {
            $table->json('staff_providers')->nullable()->default(null);
            $table->json('contract_providers')->nullable()->default(null);
            $table->json('feedback')->nullable()->default(null);

            $table->text('deposit_form_file')->nullable()->default(null);
            $table->boolean('require_provider_approval')->default(false);
            $table->string('rate_for_providers')->nullable()->default(null);
            $table->string('measurement_providers',10)->nullable()->default(null);
            $table->string('rate_for_travel_time')->nullable()->default(null);
            $table->string('currency')->nullable()->default(null);
            $table->string('billing_days')->nullable()->default(null);

            $table->text('service_agreements_file')->nullable()->default(null);
            $table->string('service_url_link')->nullable()->default(null);
            $table->boolean('send_qoutes')->default(false);
            $table->boolean('customer_approve_on_login')->default(false);

            $table->text('policy_file')->nullable()->default(null);
            $table->string('policy_link')->nullable()->default(null);
            $table->boolean('customer_drive')->default(false);
            $table->boolean('cd_show_policy_customer')->default(false);
            $table->boolean('provider_drive')->default(false);
            $table->boolean('pd_show_policy_customer')->default(false);








        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_setups', function (Blueprint $table) {
            
        });
    }
};
