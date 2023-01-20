<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('bookings', function (Blueprint $table) {
      $table->increments('id');
      $table->string('booking_number');
      $table->biginteger('user_id')->unsigned();
      $table->enum('frequency_id',[1,2,3,4])->default(1)->comment('1 for one_time,2 for daily,3 for weekly,4 for monthly');
      $table->integer('accommodation_id')->unsigned();
      $table->integer('service_category')->unsigned();
      $table->datetime('booking_start_at')->nullable();
      $table->datetime('booking_end_at')->nullable();
      $table->integer('provider_count');
      $table->string('duration_hours');
      $table->string('duration_minute');
      $table->enum('payment_type',[1,2])->default(1)->comment('1 for credit card,2 for pay later');
      $table->enum('type',[1,2])->default(1)->comment('1 for live,2 for save as draft');
      $table->integer('status')->default(3);
      $table->enum('booking_status',[0,1,2])->default(2)->comment('0 for pending,1 for approved,2 for decline');
      $table->integer('coupon_id')->nullable();
      $table->text('provider_notes')->nullable();
      $table->text('customer_notes')->nullable();
      $table->text('private_notes')->nullable();
      $table->integer('billing_address_id')->nullable();
      $table->tinyInteger('is_completed')->default(0)->comment('1=completed');
      $table->tinyInteger('auto_assign')->default(0)->comment('1=auto assign');
      $table->tinyInteger('auto_notify')->default(0)->comment('1=auto notify');
      $table->timestamps();
    });
    Schema::table('bookings', function($table) {
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('accommodation_id')->references('id')->on('accommodations')->onDelete('cascade');
      $table->foreign('service_category')->references('id')->on('service_categories')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('bookings');
  }
}
