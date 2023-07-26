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
        Schema::table('payment_preferences', function (Blueprint $table) {
            $table->string('bank_name')->nullable()->default(null);
            $table->string('account_number')->nullable()->default(null);
            $table->string('routing_number')->nullable()->default(null);
            $table->unsignedBigInteger('address_id')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment_preferences', function (Blueprint $table) {
            //
        });
    }
};
