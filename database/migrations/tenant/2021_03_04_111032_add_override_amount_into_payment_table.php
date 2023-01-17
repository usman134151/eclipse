<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOverrideAmountIntoPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('payments', function (Blueprint $table) {
        $table->enum('is_override',[0,1])->default(0)->nullable()->comment('0 for not applied,1 for override_amount applied')->after('coupon_type');
        $table->string('override_amount')->nullable()->after('is_override');
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
