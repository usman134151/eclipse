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
        Schema::create('api_notifications', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->string('title');
            $table->string('btn_cancel');
            $table->string('btn_link');
            $table->integer('base_code');
            $table->enum('type',['notification','response']);
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
        Schema::dropIfExists('notifications');
    }
};
