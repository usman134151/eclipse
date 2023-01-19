<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('invoices', function (Blueprint $table) {
      $table->increments('id');
      $table->biginteger('user_id')->unsigned();
      $table->string('invoice_number')->nullable();
      $table->datetime('invoice_date')->nullable();
      $table->string('po_number')->nullable();
      $table->datetime('invoice_due_date')->nullable();
      $table->enum('invoice_status',[0,1,2,3])->default(0)->comment('0 Not Issued,1 for Issued,2 for Paid,3 for Not Paid');
      $table->text('invoice_pdf')->nullable();
    });
    Schema::table('invoices', function($table) {
      // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('invoices');
  }
}
