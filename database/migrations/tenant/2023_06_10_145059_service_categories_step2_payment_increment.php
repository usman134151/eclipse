<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
           
            $table->string('payment_increment', 10)->nullable()->default(0);
            $table->string('payment_increment_v', 10)->nullable()->default(0);
            $table->string('payment_increment_p', 10)->nullable()->default(0);
            $table->string('payment_increment_t', 10)->nullable()->default(0);
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->dropColumn([
                'payment_increment',
                'payment_increment_p',
                'payment_increment_t',
                'payment_increment_v',
             
            ]);
        });
    }
};
