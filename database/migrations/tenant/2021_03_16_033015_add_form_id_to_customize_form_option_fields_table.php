<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormIdToCustomizeFormOptionFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customize_form_option_fields', function (Blueprint $table) {
            $table->integer('form_id')->unsigned()->nullable()->after('id');
        });
        Schema::table('customize_form_option_fields', function($table) {
          $table->foreign('form_id')->references('id')->on('customize_forms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customize_form_option_fields', function (Blueprint $table) {
            //
        });
    }
}
