<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStandardRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standard_rates', function (Blueprint $table) {
            $table->id();
            $table->biginteger('user_id')->unsigned();
            $table->integer('accommodation_id');
            $table->integer('accommodation_service_id');
            $table->double('hours_price', 8, 2)->default(0);
            $table->double('after_hours_price', 8, 2)->default(0);
            $table->double('emergency_price', 8, 2)->default(0);
            $table->double('virtual_phone', 8, 2)->default(0);
            $table->biginteger('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamps();
        });
        Schema::table('standard_rates', function($table) {
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
        Schema::dropIfExists('standard_rates');
    }
}
