<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_files', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('chat_message_id');
            $table->bigInteger('user_id');
            $table->string('name');
            $table->string('size');
            $table->string('type');
            $table->string('url');
            $table->string('preview');
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
        Schema::dropIfExists('chat_files');
    }
}
