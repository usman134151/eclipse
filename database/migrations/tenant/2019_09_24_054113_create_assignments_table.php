<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->biginteger('user_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->date('assignment_start_date')->nullable();
            $table->date('assignment_end_date')->nullable();
            $table->biginteger('assignment_start_time')->nullable();
            $table->biginteger('assignment_end_time')->nullable();
            $table->string('name')->nullable();
            $table->integer('status')->nullable()->unsigned();
            $table->text('cancel_reason')->nullable();
            $table->integer('cancelled_by')->nullable();
            $table->integer('added_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('is_deleted')->nullable();
            $table->timestamps();
        });
        Schema::table('assignments', function($table) {
          $table->foreign('status')->references('id')->on('status');
        });
        Schema::table('assignments', function($table) {
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
