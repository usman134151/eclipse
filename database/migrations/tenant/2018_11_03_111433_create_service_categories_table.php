<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCategoriesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('service_categories', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('accommodations_id')->unsigned();
        $table->string('name');
        $table->text('description')->nullable();
        $table->string('frequency_id')->nullable();
        $table->enum('service_type',[1,2,3])->default(1)->comment('1 for In-person,2 for Virtual and 3 for Both');
        $table->double('service_charge', 8, 2)->nullable();
        $table->string('emergency_hour',10);
        $table->string('minimum_assistance_hours',10)->default(1);
        $table->string('minimum_assistance_min',10)->default(0);
        $table->string('payment_deduct_hour',10)->default(1);
        $table->string('cancellation_hour1',20)->default(1);
        $table->string('cancellation_hour2',20)->nullable();
        $table->double('cancellation_percentage1', 8, 2)->default(0);
        $table->double('cancellation_percentage2', 8, 2)->default(0);
        $table->double('hours_price', 8, 2)->default(1);
        $table->double('after_hours_price', 8, 2)->default(0);
        $table->double('emergency_price', 8, 2)->default(0);
        $table->double('virtual_phone', 8, 2)->default(0);
        $table->tinyInteger('status')->nullable()->comment('1 for active,0 for inactive');
        $table->biginteger('added_by')->unsigned();
        $table->integer('updated_by')->nullable();
        $table->integer('deleted_by')->nullable();
        $table->softDeletes();
        $table->timestamps();

    });

    Schema::table('service_categories', function($table) {
      $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
      $table->foreign('accommodations_id')->references('id')->on('accommodations')->onDelete('cascade');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::dropIfExists('service_categories');
    //$table->dropColumn('industry_id');
  }
}
