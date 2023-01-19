<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_specializations', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('service_id')->unsigned()->nullable();
          $table->integer('specialization_id')->unsigned()->nullable();
          $table->double('specialization_price', 8, 2)->default(0);
          $table->biginteger('added_by')->unsigned();
          $table->timestamps();
        });

        Schema::table('service_specializations', function($table) {
          $table->foreign('specialization_id')->references('id')->on('specializations');
        });
        Schema::table('service_specializations', function($table) {
          $table->foreign('service_id')->references('id')->on('service_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_specializations');
    }
}
