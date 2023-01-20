<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->biginteger('provider_id')->unsigned();
            $table->integer('rating');
            $table->integer('description');
            $table->biginteger('action_by')->unsigned();
        });
        Schema::table('ratings', function($table) {
          $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
        });
        Schema::table('ratings', function($table) {
          $table->foreign('action_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
