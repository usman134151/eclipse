<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingRequestInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_request_notifications', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('booking_log_id')->unsigned();
            $table->integer('booking_id')->unsigned();
            $table->json('user_id')->nullable();
            $table->string('type')->nullable();
            $table->enum('status',[0,1])->default(0);
            $table->json('request_info')->nullable();
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
        Schema::dropIfExists('booking_request_infos');
    }
}
