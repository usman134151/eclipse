<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeamImageAndStatusToAdminTeamsTable extends Migration
{
    public function up()
    {
        Schema::table('admin_teams', function (Blueprint $table) {
            $table->string('team_phone')->nullable()->change();
            $table->string('team_email')->nullable()->change();
            $table->string('team_description')->nullable()->change();
            $table->string('team_image')->nullable();
            $table->integer('status')->default(1);
        });
    }

    public function down()
    {
        Schema::table('admin_teams', function (Blueprint $table) {
            $table->string('team_phone')->nullable(false)->change();
            $table->dropColumn('team_image');
            $table->dropColumn('status');
        });
    }
}

