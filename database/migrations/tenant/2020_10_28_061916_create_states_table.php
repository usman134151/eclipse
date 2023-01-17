<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('states', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name',100);
      $table->string('short_name',100)->nullable();
      $table->integer('country_id')->unsigned();
    });
    Schema::table('states', function($table) {
      $table->foreign('country_id')->references('id')->on('countries');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('states');
  }
}
