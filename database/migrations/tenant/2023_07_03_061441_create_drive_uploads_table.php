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
        Schema::create('drive_uploads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('record_id')->nullable();
            $table->integer('record_type')->nullable();
            $table->text('document_title')->nullable()->default(null);
            $table->text('document_path')->nullable()->default(null);
            $table->date('expiration_date')->nullable()->default(null);
            $table->text('note')->nullable()->default(null);
            $table->unsignedBigInteger('added_by');
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
        Schema::dropIfExists('drive_uploads');
    }
};
