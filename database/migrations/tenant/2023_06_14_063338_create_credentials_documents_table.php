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
        Schema::create('credentials_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('credential_id');
            $table->integer('document_type');
            $table->string('document_expiry')->nullable();
            $table->string('document_file', 100);
            $table->timestamps();

            
        });
    }

    public function down()
    {
        Schema::dropIfExists('credentials_documents');
    }
};
