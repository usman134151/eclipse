<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceCategoriesStep5 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->integer('billing_companies')->nullable()->default(1);
            $table->integer('payment_providers')->nullable()->default(1);
            $table->integer('billing_timezone')->nullable()->default(1);
            $table->integer('billing_timezone_v')->nullable()->default(1);
            $table->integer('billing_timezone_t')->nullable()->default(1);
            $table->integer('billing_timezone_p')->nullable()->default(1);
            $table->integer('payment_timezone')->nullable()->default(1);
            $table->integer('payment_timezone_v')->nullable()->default(1);
            $table->integer('payment_timezone_t')->nullable()->default(1);
            $table->integer('payment_timezone_p')->nullable()->default(1);
            $table->integer('billing_rule')->nullable()->default(1);
            $table->integer('billing_rule_v')->nullable()->default(1);
            $table->integer('billing_rule_t')->nullable()->default(1);
            $table->integer('billing_rule_p')->nullable()->default(1);
            $table->integer('payment_rule')->nullable()->default(1);
            $table->integer('payment_rule_v')->nullable()->default(1);
            $table->integer('payment_rule_t')->nullable()->default(1);
            $table->integer('payment_rule_p')->nullable()->default(1);
            $table->double('min_payment_duration')->nullable()->default(0.0);
            $table->double('min_payment_duration_p')->nullable()->default(0.0);
            $table->double('min_payment_duration_t')->nullable()->default(0.0);
            $table->double('min_payment_duration_v')->nullable()->default(0.0);
            $table->longText('provider_display_settings')->nullable();
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
            $table->dropColumn('billing_companies');
            $table->dropColumn('payment_providers');
            $table->dropColumn('billing_timezone');
            $table->dropColumn('billing_timezone_v');
            $table->dropColumn('billing_timezone_t');
            $table->dropColumn('billing_timezone_p');
            $table->dropColumn('payment_timezone');
            $table->dropColumn('payment_timezone_v');
            $table->dropColumn('payment_timezone_t');
            $table->dropColumn('payment_timezone_p');
            $table->dropColumn('billing_rule');
            $table->dropColumn('billing_rule_v');
            $table->dropColumn('billing_rule_t');
            $table->dropColumn('billing_rule_p');
            $table->dropColumn('payment_rule');
            $table->dropColumn('payment_rule_v');
            $table->dropColumn('payment_rule_t');
            $table->dropColumn('payment_rule_p');
            $table->dropColumn('min_payment_duration');
            $table->dropColumn('min_payment_duration_p');
            $table->dropColumn('min_payment_duration_t');
            $table->dropColumn('min_payment_duration_v');
            $table->dropColumn('provider_display_settings');
        });
    }
}