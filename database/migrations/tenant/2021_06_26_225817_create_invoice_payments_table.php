<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_payments', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('invoice_id')->unsigned();
          $table->double('paid_amount', 8, 2)->default(0)->nullable();
          $table->string('paid_date', 50)->nullable();
          $table->double('outstanding_amount', 8, 2)->default(0)->nullable();
          $table->tinyInteger('approved_by_admin')->default(0);
          $table->biginteger('created_by')->unsigned()->nullable();
          $table->biginteger('approved_by')->unsigned()->nullable();
          $table->timestamps();
        });

        Schema::table('invoice_payments', function($table) {
          $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
          $table->foreign('approved_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_payments');
    }
}
