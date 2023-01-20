<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingInvitationProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_invitation_providers', function (Blueprint $table) {
            $table->id();
            $table->integer('invitation_id')->unsigned();
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->biginteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('status')->comment('0=pending, 1=intrested, 2=not intrested')->default(0);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('booking_invitation_providers');
    }
}
