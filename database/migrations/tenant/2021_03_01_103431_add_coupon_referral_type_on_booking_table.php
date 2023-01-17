<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCouponReferralTypeOnBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('bookings', function (Blueprint $table) {
        $table->string('referral_code',50)->nullable();
        $table->enum('coupon_referral_type',[1,2])->nullable()->comment('1 for coupon,2 for referral')->after('coupon_id');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
