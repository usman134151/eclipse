<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_invitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('assignment_id')->unsigned();
            $table->biginteger('provider_id')->unsigned();
            $table->tinyInteger('status')->nullable()->comment("'0' for pending '1' for interested '2' for not interested");
            $table->biginteger('added_by')->unsigned();
            $table->timestamps();
        });

        Schema::table('assignment_invitations', function($table) {
          $table->foreign('assignment_id')->references('id')->on('assignments')->onDelete('cascade');
        });
        Schema::table('assignment_invitations', function($table) {
          $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_invitations');
    }
}
