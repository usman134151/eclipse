<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('credential_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('credential_id');
            $table->unsignedBigInteger('service_id');
            $table->timestamps();


        });
    }

    public function down()
    {
        Schema::dropIfExists('credential_services');
    }
};
