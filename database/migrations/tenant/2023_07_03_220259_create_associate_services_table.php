<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('associate_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('model_id');
            $table->string('model_type');
            $table->integer('custom_prices')->default(0)->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->timestamps();
            
            // Add foreign key constraints if needed
            // $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            // $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('associate_services');
    }
}
