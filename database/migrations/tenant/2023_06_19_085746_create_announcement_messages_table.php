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
        Schema::create('announcement_messages', function (Blueprint $table) {
            $table->id();
            $table->text('message')->nullable();
            $table->tinyInteger('on_log_in_screen');
            $table->tinyInteger('on_dashboard');
            $table->tinyInteger('display_to_providers');
            $table->tinyInteger('display_to_customers');
            $table->tinyInteger('display_to_admin');
            $table->string('days')->nullable();
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
        Schema::dropIfExists('announcement_messages');
    }
};
