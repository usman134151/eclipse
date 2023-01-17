<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadDocumentsTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('upload_documents', function (Blueprint $table) {
      $table->id();
      $table->integer('user_id');
      $table->string('document_title')->nullable();
      $table->string('document_name')->nullable();
      $table->string('expiration_date')->nullable();
      $table->string('document_type')->nullable()->comment('image,pdf,doc,etc..');
      $table->text('description')->nullable();
      $table->tinyInteger('status')->nullable()->comment("'0' for pending '1' for interested '2' for not interested");
      $table->integer('added_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->integer('deleted_by')->nullable();
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
    Schema::dropIfExists('upload_documents');
  }
}
