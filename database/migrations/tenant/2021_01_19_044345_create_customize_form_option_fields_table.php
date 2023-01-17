<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizeFormOptionFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customize_form_option_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('form_field_id')->unsigned();
            $table->integer('field_type_id');
            $table->string('option_field_name')->nullable();
            $table->integer('added_by')->nullable();
            $table->timestamps();
        });
        Schema::table('customize_form_option_fields', function($table) {
          $table->foreign('form_field_id')->references('id')->on('customize_form_fields')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customize_form_option_fields');
    }
}
