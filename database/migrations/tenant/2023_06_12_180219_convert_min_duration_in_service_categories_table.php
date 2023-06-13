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
