<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_logs', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_log_id')->unsigned();
            $table->string('document_title')->nullable();
            $table->string('document_name')->nullable();
            $table->string('document_type')->nullable()->comment('image,pdf,doc,etc..');
            $table->text('description')->nullable();
            $table->tinyInteger('shared')->default(0)->comment('1=shared');
            $table->integer('added_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->datetime('deleted_at')->nullable();
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
        Schema::dropIfExists('document_logs');
    }
}
