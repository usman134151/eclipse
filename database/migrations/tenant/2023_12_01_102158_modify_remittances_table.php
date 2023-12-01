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

        Schema::table('remittances', function (Blueprint $table) {
            $table->integer('payment_status')->change()->comments('0 => pending, 1 => issued, 2 => paid, 3 => partial');
            $table->integer('outstanding_amount')->nullable()->default('0');
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
};
