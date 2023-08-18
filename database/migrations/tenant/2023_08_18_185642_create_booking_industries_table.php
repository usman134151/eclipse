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
        Schema::create('booking_industries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('industry_id');
            $table->timestamps();

            // Define foreign key constraints
           // $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
           // $table->foreign('industry_id')->references('id')->on('industries')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_industries');
    }
};
