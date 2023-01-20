<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecializationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specializations', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->nullable();
          $table->string('description')->nullable();
          $table->string('image')->nullable();
          $table->enum('status',[0,1])->default(1)->comment('1 for active,0 for inactive');
          $table->biginteger('added_by')->unsigned();
          $table->integer('updated_by')->nullable();
          $table->integer('deleted_by')->nullable();
          $table->softDeletes();
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
        Schema::dropIfExists('specializations');
    }
}
