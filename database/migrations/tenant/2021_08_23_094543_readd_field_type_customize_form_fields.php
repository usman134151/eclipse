<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReaddFieldTypeCustomizeFormFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customize_form_fields', function (Blueprint $table) {
            $table->enum('field_type',[0,1,2,3,4,5])->default(1)->comment('0 for text,1 for textarea,2 for dropdown,3 for checkbox,4 for radio_button,5 for file')->after('scenario');
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
