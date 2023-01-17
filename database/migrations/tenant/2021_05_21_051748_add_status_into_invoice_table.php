<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusIntoInvoiceTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('invoices', function (Blueprint $table) {
      $table->string('payment_method')->nullable();
      $table->enum('supervisor_payment_status',[0,1])->default(0)->comment('0 Not Paid,1 for Paid');
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
