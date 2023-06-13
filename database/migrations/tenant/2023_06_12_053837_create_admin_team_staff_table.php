<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('admin_team_staff'); 

        Schema::create('admin_team_staff', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_team_id')->unsigned();
            $table->foreign('admin_team_id')->references('id')->on('admin_teams')->onDelete('cascade');
            $table->biginteger('admin_staff_id')->unsigned();
           // $table->foreign('admin_staff_id')->references('id')->on('users')->onDelete('cascade');     
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
        Schema::dropIfExists('admin_team_staff');
    }
};
