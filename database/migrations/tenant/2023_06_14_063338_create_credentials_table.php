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
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->string('credential_title');
            $table->integer('credential_tags')->default(0);
            $table->integer('credentials_specializations')->default(0);
            $table->integer('credentials_services')->default(0);
            $table->longText('credential_requirements')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('credentials');
    }
};
