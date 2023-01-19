<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProviderApplication extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_applications', function (Blueprint $table) {
          $table->increments('id');
          $table->biginteger('user_id')->unsigned();
          $table->integer('status')->default(0)->comment('0 for pending,1 for approved,2 deny,3 for screening');
          $table->softDeletes();
          $table->timestamps();
        });

        Schema::table('provider_applications', function($table) {
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
        Schema::dropIfExists('table_provider_application');
    }
}
