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
        Schema::create('notification_role_frequency', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('notification_template_role_id');
            $table->integer('frequency_days');
            $table->integer('frequency_hour');
            $table->integer('frequency_min');
            $table->integer('frequency_type')->default(1);
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
        Schema::dropIfExists('notification_role_frequency');
    }
};
