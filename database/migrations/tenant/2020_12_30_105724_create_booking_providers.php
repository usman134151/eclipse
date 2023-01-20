<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_providers', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->biginteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('remittance_id')->default(0);
            $table->tinyInteger('is_override_price')->default(0)->nullable()->comment('1= booking price over ride');
            $table->double('override_price',8,2)->default(0)->nullable();
            $table->text('additional_label_provider')->nullable();
            $table->double('additional_charge_provider', 8, 2)->default(0)->nullable();
            $table->tinyInteger('check_in_status')->nullable()->nullable()->comment('0= on time, 1= checked in, 2= running late');
            $table->tinyInteger('payment_status')->default(0)->nullable()->comment('0= Pending, 1= Issued, 2= paid');
            $table->tinyInteger('payment_method')->nullable()->comment('1= Direct Deposit, 2= Mail a Check, 3 = remit as zero');
            $table->datetime('issued_at')->nullable();
            $table->datetime('payment_scheduled_at')->nullable();
            $table->datetime('paid_at')->nullable();
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('booking_providers');
    }
}
