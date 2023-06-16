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
        Schema::table('customize_form_fields', function (Blueprint $table) {
            //
            $table->text('field_name')->nullable()->change();
            $table->text('screen_name')->nullable()->change();
            $table->text('title')->nullable()->change();
            $table->text('placeholder')->nullable()->change();

        });
        Schema::table('customize_form_option_fields', function (Blueprint $table) {
            //
            $table->text('option_field_name')->nullable()->change();
        });

        Schema::table('customize_forms', function (Blueprint $table) {
            $table->text('screen_name')->nullable()->change();
            $table->text('request_form_name')->nullable()->change();
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
};
