<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteLeadsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('quote_leads', function (Blueprint $table) {
      $table->increments('id');
      $table->string('consumer');
      $table->string('email');
      $table->string('phone')->nullable();
      $table->string('company')->nullable();
      $table->integer('industry_id')->unsigned();
      $table->integer('accommodation_id')->unsigned();
      $table->integer('service_category')->unsigned();
      $table->integer('service_type')->nullable();
      $table->datetime('booking_start_at')->nullable();
      $table->datetime('booking_end_at')->nullable();
      $table->datetime('issued_at')->nullable();
      $table->string('pdf')->nullable();
      $table->integer('provider_count');
      $table->string('duration_hours');
      $table->string('duration_minute');
      $table->string('specialization_id')->nullable();
      $table->integer('status')->default(0)->comment('0 for request,1 for quote');
      $table->enum('quote_status',[0,1,2])->default(0)->comment('0 for pending,1 for issued,2 for approved');
      $table->text('notes')->nullable();
      $table->integer('customer_id')->nullable();
      $table->integer('booking_id')->nullable();
      $table->tinyInteger('lead_converted')->default(0)->comment('1=yes');
      $table->tinyInteger('quote_converted')->default(0)->comment('1=yes');
      $table->softDeletes();
      $table->timestamps();
    });
    Schema::table('quote_leads', function($table) {
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
    Schema::dropIfExists('quote_leads');
  }
}
