<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCacellationOnPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('payments', function (Blueprint $table) {
        $table->double('cancellation_charges', 8, 2)->default(0)->nullable()->after('outstanding_amount');
        $table->string('stripe_refund_id')->nullable()->after('payment_reference');
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
