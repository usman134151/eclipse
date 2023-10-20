<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_reimbursements', function (Blueprint $table) {
            $table->json('reason')->change();
            $table->tinyInteger('charge_to_customer')->default(0)->after('payment_method');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_reimbursements', function (Blueprint $table) {
            $table->text('reason')->change();
            $table->dropColumn('charge_to_customer');
        });
    }
};