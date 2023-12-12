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
        Schema::table('business_setups', function (Blueprint $table) {
            $table->integer("email_notifications")->default(1);
            $table->integer("sms_notifications")->default(1);
            $table->integer("system_notifications")->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('business_setups', function (Blueprint $table) {
            $table->dropColumn('email_notifications');
            $table->dropColumn('sms_notifications');
            $table->dropColumn('system_notifications');
        });
    }
};
