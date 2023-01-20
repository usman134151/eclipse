<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLanguagesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('user_languages', function (Blueprint $table) {
      $table->id();
      $table->biginteger('user_id')->unsigned();
      $table->integer('language_id')->unsigned();
    });
    Schema::table('user_languages', function($table) {
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
    Schema::table('user_languages', function($table) {
      $table->foreign('language_id')->references('id')->on('languages');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('user_languages');
  }
}
