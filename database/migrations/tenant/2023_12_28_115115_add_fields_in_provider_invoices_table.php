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
        Schema::table('provider_invoices', function (Blueprint $table) {
            $table->dateTime('paid_at')->nullable()->default(null);
            $table->integer('payment_method')->nullable()->default(null);
            $table->integer('payment_status')->nullable()->default(null);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provider_invoices', function (Blueprint $table) {
            //
        });
    }
};