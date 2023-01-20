<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingReimbursements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_reimbursements', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->biginteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('remittance_id')->default(0);
            $table->double('amount', 8, 2)->default(0);
            $table->text('reason')->nullable();
            $table->string('document')->nullable();
            $table->tinyInteger('status')->comment('0=pending, 1=approved, 2=Denied')->default(0);
            $table->tinyInteger('payment_status')->comment('0=pending, 1=issued, 2=paid')->default(0);
            $table->tinyInteger('payment_method')->nullable()->comment('1= Direct Deposit, 2= Mail a Check');
            $table->datetime('issued_at')->nullable();
            $table->date('payment_scheduled_at')->nullable();
            $table->datetime('paid_at')->nullable();
            $table->integer('added_by');
            $table->integer('approved_by')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
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
        Schema::dropIfExists('booking_reimbursements');
    }
}
