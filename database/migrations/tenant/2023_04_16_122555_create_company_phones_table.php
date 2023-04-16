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
        Schema::create('company_phones', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id')->unsigned();
            $table->string('company_phone_title');
            $table->string('company_phone_number');
            $table->timestamps();
    
            $table->foreign('company_id')->references('id')->unsigned()->on('companies')->onDelete('cascade');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_phones');
    }
};
