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
            //
            $table->string('number')->nullable()->default(null);
            $table->unsignedBigInteger('added_by')->nullable()->default(null);
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
