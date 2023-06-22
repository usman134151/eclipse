<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credential_documents', function (Blueprint $table) {
            $table->id();
            $table->string('document_type_radio')->nullable();
            $table->string('expiration_within_price')->nullable();
            $table->string('upload_file')->nullable();
            $table->unsignedBigInteger('credential_id');
            $table->timestamps();
            $table->foreign('credential_id')->references('id')->on('credentials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credential_documents');
    }
};
