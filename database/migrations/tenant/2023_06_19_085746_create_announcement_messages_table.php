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
            $table->tinyInteger('on_log_in_screen')->default(0);
            $table->tinyInteger('on_dashboard')->default(0);
            $table->tinyInteger('display_to_providers')->default(0);
            $table->tinyInteger('display_to_customers')->default(0);
            $table->tinyInteger('display_to_admin')->default(0);
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
