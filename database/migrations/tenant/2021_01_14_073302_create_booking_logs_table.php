<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingLogsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('booking_logs', function (Blueprint $table) {
      $table->increments('id');
      $table->biginteger('user_id')->unsigned();
      $table->enum('frequency_id',[1,2,3,4])->default(1)->comment('1 for one_time,2 for daily,3 for weekly,4 for monthly');
      $table->integer('accommodation_id')->unsigned();
      $table->integer('service_category_id')->unsigned();
      $table->string('specialization_id')->nullable();
      $table->integer('provider_count');
      $table->datetime('booking_start_at');
      $table->datetime('booking_end_at');
      $table->string('duration_hours');
      $table->string('duration_minute');
      $table->enum('status',[0,1])->default(1)->comment('1 for active,0 for inactive');
      $table->timestamps();
    });
    Schema::table('booking_logs', function($table) {
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('accommodation_id')->references('id')->on('accommodations')->onDelete('cascade');
      $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('booking_logs');
  }
}
