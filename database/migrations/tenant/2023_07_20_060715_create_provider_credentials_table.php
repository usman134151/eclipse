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
        Schema::create('provider_credentials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id')->nullable()->default(null);
            $table->unsignedBigInteger('credential_document_id')->nullable()->default(null);
            $table->boolean('acknowledged')->default(false);
            $table->text('file_path')->nullable()->default(null);
            $table->date('expiry_date')->nullable()->default(null);
            $table->boolean('expiry_status')->default(false);
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
        Schema::dropIfExists('provider_credentials');
    }
};
