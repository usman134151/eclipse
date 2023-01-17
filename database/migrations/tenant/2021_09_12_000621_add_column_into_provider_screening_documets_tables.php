<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnIntoProviderScreeningDocumetsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('provider_screening_documents', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('application_id')->unsigned();
        $table->integer('custom_fields_id');
        $table->string('document_name')->nullable();
      });
      Schema::table('provider_screening_documents', function($table) {
        $table->foreign('application_id')->references('id')->on('provider_applications')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
