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
        Schema::table('companies', function (Blueprint $table) {
            $table->integer('status')->default(1)->change();
        });

               // Update status from 1 to 0
               DB::table('companies')
               ->where('status', 1)
               ->update(['status' => 0]);
   
           // Update status from 2 to 1
           DB::table('companies')
               ->where('status', 2)
               ->update(['status' => 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
