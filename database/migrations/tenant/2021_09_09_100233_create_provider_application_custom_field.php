<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderApplicationCustomField extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('provider_application_custom_fields', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('application_id')->unsigned();
      $table->integer('custom_id')->nullable();
    });
    Schema::table('provider_application_custom_fields', function($table) {
      $table->foreign('application_id')->references('id')->on('provider_applications')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('provider_application_custom_field');
  }
}
