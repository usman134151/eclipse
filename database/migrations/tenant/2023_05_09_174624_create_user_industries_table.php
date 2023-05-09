<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_industries', function (Blueprint $table) {
            $table->bigInteger('user_id');
            $table->bigInteger('industry_id');

            $table->primary(['user_id', 'industry_id']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_detail', function (Blueprint $table) {
            //
        });
    }
};
