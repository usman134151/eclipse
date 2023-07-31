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
        Schema::create('notification_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('notification_type')->nullable()->default(null)->comment('1 for sms-text, 2 for email, 3 for system');
            $table->unsignedBigInteger('model_id');
            $table->integer('model_type')->comment('1 - company, 2 - provider, 3 - customer, 4 - departments');
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
        Schema::dropIfExists('notification_settings');
    }
};
