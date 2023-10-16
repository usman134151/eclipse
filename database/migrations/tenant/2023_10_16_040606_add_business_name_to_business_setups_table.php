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
            $table->text('business_name')->nullable()->default(null)->after('user_id');
        });
    }

    public function down()
    {
        Schema::table('business_setups', function (Blueprint $table) {
            $table->dropColumn('business_name');
        });
    }
};
