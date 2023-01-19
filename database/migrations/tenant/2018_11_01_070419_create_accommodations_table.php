<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('image')->nullable();
          $table->tinyInteger('status')->nullable()->comment('1 for active,0 for inactive');
          $table->biginteger('added_by')->unsigned();
          $table->integer('updated_by')->nullable();
          $table->integer('deleted_by')->nullable();
          $table->softDeletes();
          $table->timestamps();
        });
        Schema::table('accommodations', function($table) {
          $table->foreign('added_by')->references('id')->signed()->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accommodations');
    }
}
