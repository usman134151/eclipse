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
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('service_categories')
        ->whereNotNull('min_payment_duration')
        ->update(['min_payment_duration' => 1.00]);
        DB::table('service_categories')
        ->whereNotNull('min_payment_duration_p')
        ->update(['min_payment_duration_p' => 1.00]);
        DB::table('service_categories')
        ->whereNotNull('min_payment_duration_t')
        ->update(['min_payment_duration_t' => 1.00]);
        DB::table('service_categories')
        ->whereNotNull('min_payment_duration_v')
        ->update(['min_payment_duration_v' => 1.00]);
    
        Schema::table('service_categories', function (Blueprint $table) {

            $table->string('min_payment_duration', 10)->default(null)->change();
            $table->string('min_payment_duration_p', 10)->default(null)->change();
            $table->string('min_payment_duration_t', 10)->default(null)->change();
            $table->string('min_payment_duration_v', 10)->default(null)->change();

            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
};
