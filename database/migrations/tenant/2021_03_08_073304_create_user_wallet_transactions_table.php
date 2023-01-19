<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWalletTransactionsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('user_wallet_transactions', function (Blueprint $table) {
      $table->id();
      $table->biginteger('user_id')->unsigned();
      $table->string('transaction_type','50')->nullable();
      $table->string('action','50')->nullable();
      $table->integer('booking_id')->nullable();
      $table->double('balance', 8, 2)->default(0);
      $table->integer('remittance_id')->default(0);
      $table->timestamps();
    });
    Schema::table('user_wallet_transactions', function($table) {
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('user_wallet_transactions');
  }
}
