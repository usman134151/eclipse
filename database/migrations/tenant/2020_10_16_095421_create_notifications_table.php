<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('notifications', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id');
      $table->integer('item_id')->nullable();
      $table->string('item')->nullable();
      $table->text('slug')->nullable();
      $table->text('message')->nullable();
      $table->integer('action_by')->nullable();
      $table->tinyInteger('is_read')->nullable();
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
    Schema::dropIfExists('notifications');
  }
}
