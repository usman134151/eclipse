<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->biginteger('action_by')->unsigned();
            $table->string('action_to')->nullable();
            $table->string('item_type');
            $table->string('type')->nullable();
            $table->string('message')->nullable();
            $table->string('request_from')->nullable();
            $table->string('request_to')->nullable();
            $table->string('ip_address')->nullable();
            $table->enum('is_read',[0,1])->default(0)->comment('1 for read,0 for unread');
            $table->timestamps();
        });
        Schema::table('logs', function($table) {
          $table->foreign('action_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
