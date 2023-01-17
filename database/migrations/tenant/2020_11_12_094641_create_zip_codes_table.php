<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipCodesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('zip_codes', function (Blueprint $table) {
      $table->id();
      $table->integer('state_id')->unsigned();
      $table->integer('zip_code');
      $table->string('city_county',255)->nullable();
    });
    Schema::table('zip_codes', function($table) {
      $table->foreign('state_id')->references('id')->on('states');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
   Schema::dropIfExists('zip_codes');
  }
}
