<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('services', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('price')->nullable();
      $table->integer('category')->unsigned();
      $table->string('description')->nullable();
      $table->string('image');
      $table->string('other');
      $table->enum('status',[0,1])->default(1)->comment('1 for active,0 for inactive');
      $table->biginteger('added_by')->unsigned();
      $table->integer('updated_by')->nullable();
      $table->integer('deleted_by')->nullable();
      $table->softDeletes();
      $table->timestamps();
    });
    Schema::table('services', function($table) {
      $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
    });
    Schema::table('services', function($table) {
      $table->foreign('category')->references('id')->on('service_categories');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('services');
  }
}
