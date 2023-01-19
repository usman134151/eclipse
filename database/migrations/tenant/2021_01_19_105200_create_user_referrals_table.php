<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReferralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_referrals', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('user_id')->unsigned()->comment('new user who put referral code on existing user');
            $table->integer('referral_user_id')->comment('referral code user');
            $table->string('referral_code')->nullable();
            $table->enum('type',[0,1])->comment('0 for referrer,1 for referee');
            $table->double('referral_amount',8,2)->default(0);
            $table->integer('added_by');
        });
        Schema::table('user_referrals', function($table) {
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_referrals');
    }
}
