<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScreenColumnToCustomizeFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customize_form_fields', function (Blueprint $table) {
            $table->string('screen_name')->nullable()->after('field_name');
            $table->string('title')->nullable()->after('screen_name');
            $table->string('scenario')->nullable()->after('title');
            $table->integer('allow_redo')->nullable()->after('required');
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
