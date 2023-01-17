<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRefereeAmountToReferralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('referral_settings', function (Blueprint $table) {
          $table->renameColumn('referrer_amount','provider_referrer_amount');
          $table->renameColumn('referee_amount','provider_referee_amount');
          $table->enum('provider_discount_type',[1,2])->default(1)->comment('1 for percentage,2 for amount');
          $table->double('customer_referrer_amount', 8, 2)->default(0);
          $table->double('customer_referee_amount', 8, 2)->default(0);
          $table->enum('customer_discount_type',[1,2])->default(1)->comment('1 for percentage,2 for amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('referral_settings', function (Blueprint $table) {
            //
        });
    }
}
