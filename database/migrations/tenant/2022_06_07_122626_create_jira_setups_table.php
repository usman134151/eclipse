<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJiraSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jira_setups', function (Blueprint $table) {
            $table->id();
            $table->string('jira_project_name');
            $table->string('jira_project_description');
            $table->string('jira_site_url');
            $table->string('jira_username');
            $table->string('api_token');
            $table->string('jira_account_id');
            $table->string('jira_basic_auth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jira_setups');
    }
}
