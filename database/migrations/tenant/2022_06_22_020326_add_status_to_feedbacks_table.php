<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feed_backs', function (Blueprint $table) {
            $table->string('status')->after('jira_response');
            $table->string('user_name')->after('status');
            $table->integer('issue_id')->after('user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('feed_backs', function (Blueprint $table) {
            //
        });
    }
}
