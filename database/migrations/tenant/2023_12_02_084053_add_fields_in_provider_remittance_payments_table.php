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
        Schema::table('provider_remittance_payments', function (Blueprint $table) {
            $table->integer('payment_status')->default(0);
            $table->integer('payment_method')->default(0);
            $table->integer('remittance_id')->nullable()->default(null);
            $table->dateTime('paid_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_remittance_payments', function (Blueprint $table) {
            //
        });
    }
};
