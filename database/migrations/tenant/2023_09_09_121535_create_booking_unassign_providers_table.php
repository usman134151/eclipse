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
        Schema::create('booking_unassign_providers', function (Blueprint $table) {
            $table->id();
            $table->text('unassign_reason')->nullable()->default(null);
            $table->timestamp('unassign_date')->nullable()->default(null);
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('booking_id');
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
        Schema::dropIfExists('booking_unassign_providers');
    }
};
