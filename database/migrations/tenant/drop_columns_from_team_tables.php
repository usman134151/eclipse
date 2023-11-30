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
        return;
        Schema::table('team_tables', function (Blueprint $table) {
            // {
            Schema::table('team_specializations', function (Blueprint $table) {
                $table->dropConstrainedForeignId('accommodation_id');
                $table->dropConstrainedForeignId('service_id');
            });

            Schema::table('team_services', function (Blueprint $table) {
                $table->dropConstrainedForeignId('accommodation_id');
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('team_tables', function (Blueprint $table) {
            Schema::table('team_specializations', function (Blueprint $table) {
                $table->unsignedBigInteger('accommodation_id');
                $table->unsignedBigInteger('service_id');
            });

            Schema::table('team_services', function (Blueprint $table) {
                $table->unsignedBigInteger('accommodation_id');
            });        });
    }
};
