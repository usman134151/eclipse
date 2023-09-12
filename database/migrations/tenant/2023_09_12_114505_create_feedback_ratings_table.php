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
        Schema::create('feedback_ratings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feedback_to')->nullable()->default(null);
            $table->unsignedBigInteger('feedback_from')->nullable()->default(null);
            $table->integer('rating')->nullable()->default(null);
            $table->text('comments')->nullable()->default(null);
            $table->unsignedBigInteger('booking_service_id')->nullable()->default(null);
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
        Schema::dropIfExists('feedback_ratings');
    }
};
