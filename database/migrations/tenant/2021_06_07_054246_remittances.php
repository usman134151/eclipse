<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Remittances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remittances', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->biginteger('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
            $table->double('amount', 8, 2)->default(0);
            $table->tinyInteger('payment_status')->comment('0=pending, 1=issued, 2=paid')->nullable();
            $table->tinyInteger('payment_method')->nullable()->comment('1= Direct Deposit, 2= Mail a Check, 3= marked as zero');
            $table->datetime('issued_at')->nullable();
            $table->date('payment_scheduled_at')->nullable();
            $table->datetime('paid_at')->nullable();
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
        Schema::dropIfExists('remittances');

    }
}
