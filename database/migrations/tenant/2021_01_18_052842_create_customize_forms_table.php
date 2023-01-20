<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizeFormsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('customize_forms', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->enum('status',[0,1])->default(1)->comment('1 for active,0 for inactive');
      $table->biginteger('added_by')->unsigned();
      $table->integer('updated_by')->nullable();
      $table->integer('deleted_by')->nullable();
      $table->softDeletes();
      $table->timestamps();

    });
    Schema::table('customize_forms', function($table) {
      $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('customize_forms');
  }
}
