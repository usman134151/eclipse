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
            $table->dropForeign(['booking_id']);
        });
        Schema::table('booking_reimbursements', function (Blueprint $table) {
            $table->unsignedBigInteger('booking_id')->nullable()->default(null)->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_reimbursement', function (Blueprint $table) {
            //
        });
    }
};
