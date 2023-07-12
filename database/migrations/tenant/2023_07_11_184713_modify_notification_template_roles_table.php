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
        Schema::table('notification_template_roles', function (Blueprint $table) {
            
            $table->renameColumn('user_id', 'role_id');
            $table->text('admin_roles')->nullable()->default(null)->after('notification_text');
            $table->text('customer_roles')->nullable()->default(null)->after('admin_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notification_template_roles', function (Blueprint $table) {
            $table->dropColumn(['admin_roles', 'customer_roles']);
            $table->renameColumn('role_id', 'user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
