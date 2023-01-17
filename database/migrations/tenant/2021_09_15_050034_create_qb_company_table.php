<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQbCompanyTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('qb_companies', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->nullable();
      $table->string('company_id')->nullable();
      $table->string('company_name')->nullable();
      $table->string('company_email')->nullable();
      $table->string('company_address')->nullable();
      $table->string('company_phone')->nullable();
      $table->integer('company_primary_user')->nullable();
      $table->date('company_StartDate')->nullable();
      $table->enum('status',[0,1])->default(1);
      $table->timestamps();
    });

  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('qb_company');
  }
}
