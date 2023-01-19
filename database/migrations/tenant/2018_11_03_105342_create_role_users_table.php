<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('role_user', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('role_id')->unsigned();
      $table->biginteger('user_id')->unsigned();
      $table->timestamps();
    });
    Schema::table('role_user', function($table) {
      $table->foreign('user_id')->references('id')->unsigned()->on('users');
    });
    Schema::table('role_user', function($table) {
      $table->foreign('role_id')->references('id')->unsigned()->on('roles');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('role_user');
  }
}
