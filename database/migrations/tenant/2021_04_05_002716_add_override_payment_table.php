<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverridePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('payments', function (Blueprint $table) {
        $table->double('additional_override_booking_charges', 8, 2)->default(0)->nullable()->after('cancellation_charges');
        $table->string('override_payment_stripe_id')->nullable()->after('payment_reference');
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
