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
        ->whereNull('rate_status')
        ->update(['rate_status' => 1]);
        DB::table('service_categories')
    ->where('rate_status', '1.00')
    ->update(['rate_status' => 1]);
    DB::table('service_categories')
    ->where('rate_status', '2.00')
    ->update(['rate_status' => 2]);
    DB::table('service_categories')
    ->where('rate_status', '3.00')
    ->update(['rate_status' => 3]);
    DB::table('service_categories')
    ->where('rate_status', '4.00')
    ->update(['rate_status' => 4]);
    
        Schema::table('service_categories', function (Blueprint $table) {

            $table->integer('rate_status')->default(1)->change();


            

            
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
