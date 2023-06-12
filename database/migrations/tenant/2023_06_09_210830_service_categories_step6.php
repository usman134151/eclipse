<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceCategoriesStep6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->longText('notification_settings')->nullable()->default(null);
            $table->longText('notification_settings_v')->nullable()->default(null);
            $table->longText('notification_settings_t')->nullable()->default(null);
            $table->longText('notification_settings_p')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_categories', function (Blueprint $table) {
            $table->dropColumn('notification_settings');
            $table->dropColumn('notification_settings_v');
            $table->dropColumn('notification_settings_t');
            $table->dropColumn('notification_settings_p');
        });
    }
}

