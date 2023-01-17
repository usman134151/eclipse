<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDocumentToCustomizeFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customize_form_fields', function (Blueprint $table) {
          $table->text('document_name')->nullable()->after('placeholder');
          $table->integer('hide_response_from_provider')->nullable()->after('document_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customize_form_fields', function (Blueprint $table) {
            //
        });
    }
}
