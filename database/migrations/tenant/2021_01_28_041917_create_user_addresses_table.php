<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('user_addresses', function (Blueprint $table) {
      $table->increments('id');
      $table->biginteger('user_id')->unsigned();
      $table->string('address_type')->nullable();
      $table->text('address_line1')->nullable();
      $table->text('address_line2')->nullable();
      $table->string('phone')->nullable();
      $table->string('city')->nullable();
      $table->string('state')->nullable();
      $table->string('country')->nullable();
      $table->string('zip')->nullable();
      $table->string('latitude','50')->nullable();
      $table->string('longitude','50')->nullable();
      $table->enum('default',[0,1])->default(0)->comment('1 for default,0 for normal');
      $table->timestamps();
    });
    Schema::table('user_addresses', function($table) {
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
    Schema::dropIfExists('user_addresses');
  }
}
