<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
          $table->id();
          $table->biginteger('user_id')->unsigned();
          $table->string('title',100)->nullable();
          $table->integer('supervisor')->nullable();
          $table->string('industry',50)->nullable();
          $table->string('profile_pic',100)->nullable();
          $table->tinyInteger('gender_id')->comment('1:Male,2:Female,3:Other')->nullable();
          $table->string('education',255)->nullable();
          $table->string('certification',255)->nullable();
          $table->text('address_line1')->nullable();
          $table->text('address_line2')->nullable();
          $table->string('phone')->nullable();
          $table->string('city')->nullable();
          $table->string('state')->nullable();
          $table->string('country')->nullable();
          $table->string('zip')->nullable();
          $table->string('latitude')->nullable();
          $table->string('longitude')->nullable();
          $table->text('physical_address_line1')->nullable();
          $table->text('physical_address_line2')->nullable();
          $table->string('physical_phone')->nullable();
          $table->string('physical_city')->nullable();
          $table->string('physical_state')->nullable();
          $table->string('physical_country')->nullable();
          $table->string('physical_zip')->nullable();
          $table->text('note')->nullable();
          $table->integer('referral_by')->nullable();
          $table->timestamps();
        });
        Schema::table('user_details', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
