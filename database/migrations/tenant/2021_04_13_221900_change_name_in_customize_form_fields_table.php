<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeNameInCustomizeFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customize_form_fields', function (Blueprint $table) {
          $table->integer('form_industry_id')->after('customize_form_id');
          $table->renameColumn('name','field_name');
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
