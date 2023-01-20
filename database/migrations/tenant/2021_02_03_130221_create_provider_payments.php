<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderPayments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_payments', function (Blueprint $table) {
            $table->id();
            $table->biginteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->double('service_charge', 8, 2)->default(0)->nullable();
            $table->double('specialization_charge', 8, 2)->default(0)->nullable();
            $table->double('total_charge', 8, 2)->default(0)->nullable();
            $table->string('after_hours_duration','50')->nullable();
            $table->double('after_hours_price', 8, 2)->default(0)->nullable();
            $table->string('business_hours_duration','50')->nullable();
            $table->double('business__hours_price', 8, 2)->default(0)->nullable();
            $table->string('hours_type','50')->nullable();
            $table->double('hours_price', 8, 2)->default(0)->nullable();
            $table->string('duration','50')->nullable();
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
        Schema::dropIfExists('provider_payments');
    }
}
