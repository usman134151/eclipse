<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('company_name',100)->nullable();
      $table->string('name');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email');
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->tinyInteger('status')->nullable()->comment('1 for Active,0 for Inactive');
      $table->integer('added_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->integer('deleted_by')->nullable();
      $table->string('security_token')->nullable();
      $table->rememberToken();
      $table->softDeletes();
      $table->timestamps();

      $table->unique(['email', 'deleted_at']);
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
