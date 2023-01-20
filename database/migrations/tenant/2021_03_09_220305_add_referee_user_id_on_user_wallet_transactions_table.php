<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRefereeUserIdOnUserWalletTransactionsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('user_wallet_transactions', function (Blueprint $table) {
      $table->biginteger('referre_user_id')->unsigned()->nullable()->comment('referre user id')->after('user_id');
      $table->enum('payment_status',[1,2])->default(2)->comment('1 for paid,2 for unpaid')->after('balance');
    });
    Schema::table('user_wallet_transactions', function($table) {
      $table->foreign('referre_user_id')->references('id')->on('users')->onDelete('cascade');
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
