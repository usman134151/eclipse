<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
  public function up()
  {
    Schema::create('receipts', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('invoice_id')->unsigned();
      $table->string('receipt_pdf')->nullable();
      $table->double('outstanding_amount', 8, 2)->default(0)->nullable();
      $table->double('paid_amount', 8, 2)->default(0)->nullable();
      $table->enum('receipt_status',[0,1])->default(0)->comment('1 for Paid,0 for Not Paid');
      $table->biginteger('created_by')->unsigned()->nullable();
      $table->timestamps();
    });

    Schema::table('receipts', function($table) {
      // $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
      $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('receipts');
  }
}
