<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_setups', function (Blueprint $table) {
          $table->id();
          $table->biginteger('user_id')->unsigned();
          $table->string('business_start_time',20)->nullable();
          $table->string('business_end_time',20)->nullable();
          $table->string('after_start_time',20)->nullable();
          $table->string('after_end_time',20)->nullable();        
          $table->timestamps();
        });
        Schema::table('business_setups', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_setups');
    }
}
