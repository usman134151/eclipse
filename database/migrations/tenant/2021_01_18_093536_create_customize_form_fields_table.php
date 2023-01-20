<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomizeFormFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customize_form_fields', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customize_form_id')->unsigned();
            $table->string('name')->nullable();
            $table->enum('field_type',[0,1,2,3,4])->default(1)->comment('0 for text,1 for textarea,2 for dropdown,3 for checkbox,4 for radio_button');
            $table->string('placeholder')->nullable();
            $table->integer('required')->nullable();
            $table->enum('status',[0,1])->default(1)->comment('1 for active,0 for inactive');
            $table->biginteger('added_by')->unsigned();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
        Schema::table('customize_form_fields', function($table) {
          $table->foreign('customize_form_id')->references('id')->on('customize_forms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customize_form_fields');
    }
}
